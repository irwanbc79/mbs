<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $retiredSlugs = config('blog.retired_slugs', [
            'tren-rekrutmen-it-2026-upskilling-karyawan-efektif',
            'era-agentic-ai-erp-crm-modern-2026',
            'anthropic-ipo-rahasia-investasi-ai-global',
            'microsoft-rilis-7-model-mandiri-frontier-ai',
            'openai-chatgpt-2026-superapp-produktivitas',
            'panduan-kepatuhan-eu-ai-act-indonesia',
            'membangun-sistem-multi-agent-otomatisasi-bisnis',
            'mengatasi-scaling-crisis-infrastruktur-it-ai',
            'recursive-self-improvement-ai-mengode-diri-sendiri',
            'kelahiran-uk-ai-economics-institute-dampak-finansial',
        ]);

        DB::table('posts')
            ->whereIn('slug', $retiredSlugs)
            ->update([
                'published_at' => null,
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $retiredSlugs = config('blog.retired_slugs', [
            'tren-rekrutmen-it-2026-upskilling-karyawan-efektif',
            'era-agentic-ai-erp-crm-modern-2026',
            'anthropic-ipo-rahasia-investasi-ai-global',
            'microsoft-rilis-7-model-mandiri-frontier-ai',
            'openai-chatgpt-2026-superapp-produktivitas',
            'panduan-kepatuhan-eu-ai-act-indonesia',
            'membangun-sistem-multi-agent-otomatisasi-bisnis',
            'mengatasi-scaling-crisis-infrastruktur-it-ai',
            'recursive-self-improvement-ai-mengode-diri-sendiri',
            'kelahiran-uk-ai-economics-institute-dampak-finansial',
        ]);

        DB::table('posts')
            ->whereIn('slug', $retiredSlugs)
            ->update([
                'published_at' => '2026-06-08 15:04:42',
            ]);
    }
};
