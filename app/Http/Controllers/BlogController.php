<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        // Only show published posts
        if (!$post->published || $post->published_at > now()) {
            abort(404);
        }

        // Increment views
        $post->increment('views');

        // Get related posts
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
