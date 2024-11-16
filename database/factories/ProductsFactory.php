<?php

namespace Database\Factories;
use App\Models\Group;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'buying_price' => fake()->randomFloat(2, 50, 500),
            'selling_price' => fake()->randomFloat(2, 50, 500),
            'group_id' => Group::Factory(),
            'name' => "Phone",
            'stock' => fake()->numberBetween(50, 500),
        ];
    }
}
