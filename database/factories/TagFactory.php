<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $name = $this->faker->words(1, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
