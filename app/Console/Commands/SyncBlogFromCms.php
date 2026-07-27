<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Bridge: tarik artikel PUBLISHED morabangun (site 4) dari read API CMS
 * (cms.m2b.co.id) dan upsert ke tabel `posts` lokal agar tampil di /blog.
 *
 * Aman by default: hanya CREATE untuk slug yang belum ada (post yang diedit
 * lokal tidak tertimpa). Pakai --all untuk ikut meng-update post existing,
 * dan --dry-run untuk preview tanpa menulis DB.
 */
class SyncBlogFromCms extends Command
{
    protected $signature = 'blog:sync-cms {--limit=50 : page size} {--all : also update existing posts} {--dry-run : preview only, no DB writes}';

    protected $description = 'Pull published morabangun articles from the CMS API and upsert into local posts.';

    /** pillar CMS site 4 -> [kategori, warna] persis konvensi posts existing */
    private const CATEGORY_MAP = [
        'erp-enterprise'       => ['ERP & Enterprise', 'emerald'],
        'crm-sales'            => ['CRM & Sales', 'blue'],
        'ai-teknologi'         => ['AI & Teknologi', 'cyan'],
        'transformasi-digital' => ['Transformasi Digital', 'violet'],
        'solusi-industri'      => ['Solusi Industri', 'amber'],
    ];

    /** kategori -> author_role (pola byline existing "Tim Mora Bangun") */
    private const ROLE_MAP = [
        'ERP & Enterprise'     => 'ERP Specialist',
        'CRM & Sales'          => 'CRM Consultant',
        'AI & Teknologi'       => 'AI Solution Architect',
        'Transformasi Digital' => 'Digital Transformation Expert',
        'Solusi Industri'      => 'Business Solutions Consultant',
    ];

    public function handle(): int
    {
        $base  = rtrim((string) config('services.cms.url'), '/');
        $token = (string) config('services.cms.token');

        if ($base === '' || $token === '') {
            $this->error('CMS API not configured. Set CMS_API_URL & CMS_API_TOKEN in .env.');
            return self::FAILURE;
        }

        $dry = (bool) $this->option('dry-run');
        $all = (bool) $this->option('all');
        $created = $updated = $skipped = $failed = 0;
        $page = 1;
        $lastPage = 1;

        do {
            $resp = Http::withToken($token)->acceptJson()->timeout(30)
                ->get("{$base}/api/v1/articles", [
                    'limit' => (int) $this->option('limit'),
                    'page'  => $page,
                ]);

            if ($resp->failed()) {
                $this->error("List request failed (page {$page}): HTTP {$resp->status()}");
                return self::FAILURE;
            }

            $json     = $resp->json();
            $lastPage = (int) ($json['meta']['last_page'] ?? 1);

            foreach (($json['data'] ?? []) as $item) {
                $slug = $item['slug'] ?? null;
                if (! $slug) {
                    continue;
                }

                $exists = Post::where('slug', $slug)->exists();
                if ($exists && ! $all) {
                    $skipped++;
                    $this->line("  skip (exists): {$slug}");
                    continue;
                }

                // Ambil detail penuh untuk content_html.
                $detail = Http::withToken($token)->acceptJson()->timeout(30)
                    ->get("{$base}/api/v1/articles/{$slug}");
                if ($detail->failed()) {
                    $failed++;
                    $this->warn("  detail failed: {$slug} (HTTP {$detail->status()})");
                    continue;
                }

                $a = $detail->json('data') ?? [];
                [$category, $color] = self::CATEGORY_MAP[$a['pillar'] ?? ''] ?? ['AI & Teknologi', 'cyan'];
                $html  = (string) ($a['content_html'] ?? '');
                $words = str_word_count(strip_tags($html));

                $data = [
                    'title'          => $a['title'] ?? $slug,
                    'content'        => $html,
                    'excerpt'        => !empty($a['excerpt']) ? $a['excerpt'] : (substr(trim(strip_tags($html)), 0, 160) ?: $a['title'] ?? ''),
                    'featured_image' => $a['featured_image_url'] ?? null,
                    'category'       => $category,
                    'category_color' => $color,
                    'tags'           => is_array($a['tags'] ?? null) ? $a['tags'] : [],
                    'author_name'    => 'Tim Mora Bangun',
                    'author_role'    => self::ROLE_MAP[$category],
                    'reading_time'   => max(1, intdiv($words, 200)),
                    'published_at'   => $a['published_at'] ?? now(),
                ];

                if ($dry) {
                    $verb = $exists ? 'UPDATE' : 'CREATE';
                    $this->line("  [{$verb}] {$slug}  ->  [{$category}] {$data['title']}");
                    $exists ? $updated++ : $created++;
                    continue;
                }

                $post = Post::updateOrCreate(['slug' => $slug], $data);
                $post->wasRecentlyCreated ? $created++ : $updated++;
            }

            $page++;
        } while ($page <= $lastPage);

        $mode = $dry ? 'DRY-RUN' : 'SYNC';
        $this->info("{$mode} done: created={$created} updated={$updated} skipped={$skipped} failed={$failed}");
        if (! $dry) {
            Log::info('blog:sync-cms', compact('created', 'updated', 'skipped', 'failed'));
        }

        return self::SUCCESS;
    }
}
