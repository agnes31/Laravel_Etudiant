<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $frenchFaker = \Faker\Factory::create('fr_FR');
        
        return [
            'title' => $this->faker->catchPhrase,
            'title_fr' => $frenchFaker->catchPhrase,
            'body'  => $this->faker->paragraph(25),
            'body_fr'  => $frenchFaker->paragraph(25),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}