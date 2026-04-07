<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition()
{
    return [
        'name' => fake()->firstName(),
        'breed' => fake()->randomElement(['Persian Cat', 'Siamese', 'Golden Retriever', 'Pug']),
        'age' => fake()->numberBetween(1, 10),
        'description' => fake()->sentence(8),
        'status' => 'Available',
    ];
}
}
