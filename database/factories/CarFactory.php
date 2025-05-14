<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'year' => fake()->year(),
            'price' => fake()->randomFloat(2, 0, 100000),
            'description' => fake()->sentence(),
            'image_path' => fake()->imageUrl(),
            'quantity' => fake()->numberBetween(0, 100),
            'deleted_at' => null,
            'created_at' => now(),
        ];
    }
}
