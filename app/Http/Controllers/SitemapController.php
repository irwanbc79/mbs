<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $posts = Post::published()->orderByDesc('published_at')->get(['slug', 'updated_at']);

        $staticPages = [
            ['url' => url('/'),        'priority' => '1.0',  'changefreq' => 'weekly'],
            ['url' => url('/harga'),   'priority' => '0.8',  'changefreq' => 'monthly'],
            ['url' => url('/blog'),    'priority' => '0.8',  'changefreq' => 'daily'],
            ['url' => url('/blog/about'), 'priority' => '0.5', 'changefreq' => 'yearly'],
            ['url' => url('/solusi'),  'priority' => '0.9',  'changefreq' => 'monthly'],
            ['url' => url('/privacy-policy'),   'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => url('/terms-of-service'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => url('/disclaimer'),       'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        $solusiSlugs = [
            'portal-forwarder', 'ceisa', 'sekolah', 'distributor', 'klinik', 'umroh',
            'kontraktor', 'bengkel', 'properti', 'koperasi', 'trucking', 'percetakan',
            'reseller', 'kos', 'jastip',
        ];
        foreach ($solusiSlugs as $slug) {
            $staticPages[] = ['url' => url('/solusi/' . $slug), 'priority' => '0.85', 'changefreq' => 'monthly'];
        }

        $xml = view('sitemap', compact('staticPages', 'posts'))->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
