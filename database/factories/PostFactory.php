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
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=> "<p class='mt-2 lg:mt-0 text-slate-600 dark:text-slate-300 sm:mt-4 sm:text-xl text-justify'>$p</p>")
                        ->implode(''),
        ];
    }
}
