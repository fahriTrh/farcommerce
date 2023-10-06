<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'category_id' => mt_rand(1,5),
            'photo' => mt_rand(1,12) . '.png',
            'user_id' => 1,
            'price' => 1000,
            'description' => fake()->paragraph(),
        ];
    }
}
