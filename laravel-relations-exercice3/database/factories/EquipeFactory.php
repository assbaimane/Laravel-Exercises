<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name,
            'ville' => $this->faker->city,
            "pays" => $this->faker->country,
            "continent" => $this->faker->randomElement(['Europe','Hors-Europe']),
            "nbmaxavant" => 2,
            "nbmaxarriere" => 2,
            "nbmaxcentraux" => 2,
            "nbmaxremplacant" => 3
        ];
    }
}
