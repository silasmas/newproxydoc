<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\abonnement>
 */
class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $services=["Ordinaire","Standars","Business","Premium"];
                $prix=["1", "2", "3","5"];
                $duree=["1", "2", "3","5"];
                $temps=["Mois", "Ans", "semaine"];
            return [
                'nom' => $this->faker->randomElement($services),
                'description' => $this->faker->paragraph,
                'duree' => $this->faker->randomElement($duree),
                'temps' => $this->faker->randomElement($temps),
                'prix' => $this->faker->randomElement($prix),
                'monaie' => 'USD',
            ];
    }
}
