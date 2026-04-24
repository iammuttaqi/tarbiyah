<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::published()
            ->with('author')
            ->paginate(9);

        return view('pages.blog.index', compact('posts'));
    }

    public function show(Post $post): View
    {
        abort_unless(
            $post->is_published && $post->published_at?->isPast(),
            404
        );

        $post->load('author');

        return view('pages.blog.show', compact('post'));
    }
}
