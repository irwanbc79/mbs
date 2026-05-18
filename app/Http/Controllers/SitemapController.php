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
        ];

        $xml = view('sitemap', compact('staticPages', 'posts'))->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
