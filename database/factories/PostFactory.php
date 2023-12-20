<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $title = $this->faker->text(20);
        // $imageUrl ="https://via.placeholder.com/640x480.png/0066aa/ffffff?text=laravel";
        $imageUrl = "https://via.placeholder.com/640x480.png/";
        $color = $this->faker->hexColor();
        $text = $this->faker->text();
        return [
            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $imageUrl . substr($color, 1).'/ffffff?text=' . $text,
            'excerpt' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraphs(5, true),
            'featured' => $this->faker->boolean(),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
