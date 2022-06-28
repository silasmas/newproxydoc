<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\acte>
 */
class ActeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nom=[ 
            "consultation", "dentisterie", "premiers soins","acouchement",
            "Ophtamologie", "Radio", "dermatologue","consultation générale"
                ];
        return [
            'nom' => $this->faker->randomElement($nom),
            'description' => $this->faker->paragraph,
        ];
    }
}
