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
        $titles = [
            'Tools' => [
                'Pro Steel Hammer',
                'Cordless Drill 18V',
                'Precision Screwdriver Set',
                'Cordless jigsaw',
            ],
            'Bikes' => [
                'City Commuter 700C',
                'Trail Mountain Bike 29"',
                'Folding Bike 20"',
                'Kids Balance Bike',
            ],
            'Kitchen' => [
                'Air Fryer Philips',
                'Thermomix 2000"',
                'Electric Kettle 1.7L',
                'Bamboo Cutting Board',
            ],
            'Garden' => [
                'Pruning Shears',
                'Expandable Hose 50ft',
                'Hand Trowel',
                'Lawn Mower',
            ],
            'Electronics' => [
                'Wireless Headphones',
                '4K Action Camera',
                'USB‑C Charger 65W',
                'Portable SSD 1TB',
            ],
            'Sports' => [
                'Yoga Mat',
                '24kg Dumbbells',
                'Soccer Ball',
                'Speed Jump Rope',
            ],
        ];

        // Pick category first so title can match it
        $category = fake()->randomElement(array_keys($titles));

        return [
            'title'      => fake()->randomElement($titles[$category]),
            'owner_id'   => fake()->numberBetween(1, 10),
            'description'=> fake()->text(500),
            'category'   => $category,
            'address'    => fake()->address(),
        ];
    }
}
