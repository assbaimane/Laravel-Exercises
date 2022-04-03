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
            "nbavant" => 2,
            "nbarriere" => 2,
            "nbcentraux" => 2,
            "nbremplacant" => 3
        ];
    }
}
