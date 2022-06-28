<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\serviceAbonnement>
 */
class ServiceAbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $services=["1","2","3", "4"];
            $abonnement=["5", "6", "7","8"];
        return [
            'service_id' => $this->faker->randomElement($services),
            'abonnement_id' => $this->faker->randomElement($abonnement),
        ];
    }
}
