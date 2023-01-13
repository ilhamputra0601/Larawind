<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,5),
            'category_id' =>mt_rand(1,3),
            'title' => fake()->sentence(mt_rand(2,8)),
            'image' => fake()->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraph(mt_rand(10,20)),
        ];
    }
}
