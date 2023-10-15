<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom'=>fake()->name(),
            'Prenom'=>fake()->userName(),
            'About'=>fake()->text(),
            'Adresse'=>fake()->text(),
            'Age'=>fake()->numberBetween(20,45),
            'NumeroDeTelepone'=>fake()->numberBetween(10),



        ];
    }
}
