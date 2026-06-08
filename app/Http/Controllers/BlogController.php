<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query    = Post::published()->latest('published_at');
        $category = $request->get('category');
        $search   = $request->get('q');

        if ($category) {
            $query->byCategory($category);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts      = $query->paginate(6)->withQueryString();
        $featured   = Post::published()->latest('published_at')->first();
        $categories = Post::published()->select('category', 'category_color')
                         ->orderBy('category')->get()->unique('category');
        $popular    = Post::published()->orderBy('reading_time', 'desc')->limit(4)->get();

        return view('blog.index', compact('posts', 'featured', 'categories', 'popular', 'category', 'search'));
    }

    public function show(string $slug)
    {
        $post    = Post::published()->where('slug', $slug)->firstOrFail();
        $related = Post::published()
                       ->where('id', '!=', $post->id)
                       ->where('category', $post->category)
                       ->limit(3)
                       ->get();

        if ($related->count() < 3) {
            $more = Post::published()
                        ->where('id', '!=', $post->id)
                        ->whereNotIn('id', $related->pluck('id'))
                        ->limit(3 - $related->count())
                        ->get();
            $related = $related->merge($more);
        }

        return view('blog.show', compact('post', 'related'));
    }
}
