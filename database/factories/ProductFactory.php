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
            'img' => fake()->name(), 
            'name' => fake()->name(),
            'desc' => '1',
            'unit' => 'kg',
            'import_price' => fake()->randomDigit(),
            'price' => fake()->randomDigit(),
            'quantity' => fake()->randomDigit(),
            'category_id' => 1,
        ];
    }
}
