<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $users = User::factory(10)->create();

        $categories  = Category::factory(10)->create();

        $tags = Tag::factory(10)->create();

        $comments = Comment::factory(10)->create();

        $posts = Post::factory(10)->create();

        // User::factory()
        //     ->has(Post::factory()->count(10))
        //     ->create();

        // $posts = Post::factory()
        //     ->count(3)
        //     ->for(User::factory()->state([
        //         'name' => 'Jessica Archer',
        //     ]))
        //     ->create();

        // $user = User::factory()->create();

        // $posts = Post::factory()
        //     ->count(10)
        //     ->for($user)
        //     ->create();

        // $luke = User::factory(10)
        //     ->has(Post::factory(10)->recycle(Category::factory()))
        //     ->has(Comment::factory(10)->recycle(Post::factory()))
        //     ->create();

        User::factory()->create([
            'name' => 'Tuantq',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
    }
}
