<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $categories = Cache::remember('categories_posts', Carbon::now()->addDay(), function () {
            return Category::whereHas('posts', fn ($q) => $q->published())
                ->withCount('posts')
                ->take(10)->get();
        });
        return view('blogs.posts.index', [
            'categories' => $categories
        ]);
    }

    public function show(Post $post): View
    {
        return view('blogs.posts.show', [
            'post' => $post
        ]);
    }
}
