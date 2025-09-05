<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'owner_id' => fake()->numberBetween(1, 10),
            'description' => fake()->text(500),
            'category' => fake()->randomElement(['Tools', 'Bikes', 'Kitchen', 'Garden', 'Electronics', 'Sports']),
            'address' => fake()->address,
        ];
    }
}
