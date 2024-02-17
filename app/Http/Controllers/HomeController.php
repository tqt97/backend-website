<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        // $featuredPosts = Cache::remember('featuredPosts', Carbon::now()->addDay(), function () {
        //     return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        // });

        $featuredPosts = Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();

        // $latestPosts = Cache::remember('latestPosts', Carbon::now()->addDay(), function () {
        //     return Post::published()->with('categories')->latest('published_at')->take(6)->get();
        // });

        $latestPosts = Post::published()->with('categories')->latest('published_at')->take(6)->get();


        return view('home', [
            'featurePosts' => $featuredPosts,
            'latestPosts' => $latestPosts,
        ]);
    }
}
