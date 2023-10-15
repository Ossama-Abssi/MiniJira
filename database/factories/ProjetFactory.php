<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
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
            'Description'=>fake()->text(),
            'DateDebut'=>fake()->date(),
            'DateFin'=>fake()->date(),
            'EtatDeRealisation'=>fake()->boolean(),
            'organisme_id'=>fake()->numberBetween(1,10),


        ];
    }
}
