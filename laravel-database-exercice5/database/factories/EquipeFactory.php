<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
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
            'nom' => $this->faker->name(),
            'ville' => $this->faker->city(),
            'commune' => $this->faker->name(),

            'nbjoueurs' => $this->faker->numberBetween(6,13),
            'nbpostes' => $this->faker->numberBetween(1,40),
        ];
    }
}
