<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(20, 30)))->map(function ($p) {
                return "<p>$p </p>";
            })->implode(''),
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
