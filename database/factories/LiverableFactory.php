<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Liverable>
 */
class LiverableFactory extends Factory
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
            'Chemin Vers Document Disque'=>fake()->name(),
            'phase_id'=>fake()->numberBetween(1,10),


        ];
    }
}
