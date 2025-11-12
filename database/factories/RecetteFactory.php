<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recette;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Recette::class;
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),   // génère un titre aléatoire
            'body' => fake()->paragraph(),  // génère un texte de 5 phrases
        ];
    }
}
