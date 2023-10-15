<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phase>
 */
class PhaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Libellé'=>fake()->name(),
            'Description'=>fake()->text(),
            'DateDebut'=>fake()->date(),
            'DateFin'=>fake()->date(),
            'MontantAPayé'=>fake()->boolean(),
            'EtatDeRealisation'=>fake()->boolean(),
            'EtatDeFacture'=>fake()->boolean(),
            'EtatDePaiement'=>fake()->boolean(),
            'projet_id'=>fake()->numberBetween(1,10),




        ];
    }
}
