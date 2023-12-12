<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville; // sert à récupérer les villes

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->dateTimeBetween('-50 years', '-20 years'),
            'matricule' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'adresse' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->numerify('(###) ###-####'),

            'ville_id' => Ville::all()->random()->id,
        ];
    }
}
