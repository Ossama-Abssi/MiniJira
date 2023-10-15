<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisme>
 */
class OrganismeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => fake()->name(),
            'Adresse'=> fake()->address(),
            'Numero_de_telephone' => fake()->numberBetween(),
            'Le_nom_de_contact' => fake()->name(),
            'Email_de_contact' => fake()->unique()->safeEmail(),
             'Adresse_web' => fake()->url()     
        ];
    }
}
