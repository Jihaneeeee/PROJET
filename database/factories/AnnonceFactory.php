<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modele' => fake()->name(),
            'location' => fake()->city(),
            'prix' => fake()->numberBetween(1000, 10000),
            'kilometrage' => fake()->numberBetween(1000, 10000),
            'image' =>fake()->imageUrl(),
        ];
    }
}
