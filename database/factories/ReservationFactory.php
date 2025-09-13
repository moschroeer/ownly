<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('now', '+7 days');

        return
            [
            'status'=> fake()->randomElement(['pending', 'approved', 'lended','returned','cancelled']),
            'start_use'=> $start,
            'end_use'=> (clone $start)->modify('+'.fake()->numberBetween(1, 8).' hours'),
            'borrower_id'=>fake()->numberBetween(1, 10),
            'item_id'=>fake()->numberBetween(1, 10),
        ];
    }
}
