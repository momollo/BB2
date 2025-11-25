<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'nom_ingredient' => $this->faker->sentence(3),
    'body' => $this->faker->paragraph(),
    'prix' => $this->faker->randomFloat(2, 1, 100)
        ];
    }
}
