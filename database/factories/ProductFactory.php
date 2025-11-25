<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $name = 'Eco Enzim ' . fake()->word();
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . fake()->randomNumber(3),
            'price' => fake()->numberBetween(15000, 100000), // Harga 15rb - 100rb
            'description' => fake()->paragraph(),
            'image' => null,
        ];
    }
}