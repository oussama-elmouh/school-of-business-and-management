<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Filiere;
use App\Models\Professeur;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cours>
 */
class CoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(3),
            'filiere_id' => Filiere::inRandomOrder()->first()->id ?? Filiere::factory(),
            'professeur_id' => Professeur::inRandomOrder()->first()->id ?? Professeur::factory(),
        ];
    }
}
