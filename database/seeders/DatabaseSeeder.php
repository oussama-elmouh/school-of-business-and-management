<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cours;
use App\Models\Professeur;
use App\Models\Filiere;
use App\Models\Eleve;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        Filiere::factory(5)->create()->each(function ($filiere) {
            Eleve::factory(10)->create(['filiere_id' => $filiere->id]);
            Professeur::factory(3)->create()->each(function ($prof) use ($filiere) {
                Cours::factory(2)->create([
                    'filiere_id' => $filiere->id,
                    'professeur_id' => $prof->id,
                ]);
            });
        });
    }
}
