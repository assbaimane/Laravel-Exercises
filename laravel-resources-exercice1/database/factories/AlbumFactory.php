<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'description' => $this->faker->paragraph(),
            'auteur' => $this->faker->firstName(),
            'nombre' => $this->faker->numberBetween(0,1000),
        ];
    }
}
