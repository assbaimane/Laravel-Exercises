<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->name(),
            'year' => $this->faker->numberBetween(1960,2022),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomFloat(2,8000,58000),
            'discount' => $this->faker->numberBetween(10,30)
        ];
    }
}
