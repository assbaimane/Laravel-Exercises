<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\joueur>
 */
class JoueurFactory extends Factory
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
            "prenom" => $this->faker->firstName,
            "age" => $this->faker->numberBetween(18, 40),
            "telephone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
            "genre" => $this->faker->randomElement(["M", "F", "X"]),
            "origine" => $this->faker->country,
            "role" => $this->faker->randomElement(["Avant", "Arrière", "Central", "Remplaçant"]),
            "photo" => $this->faker->imageUrl(640, 480, "people"),
            "equipe_id" => $this->faker->numberBetween(1, 5),
        ];
    }
}
