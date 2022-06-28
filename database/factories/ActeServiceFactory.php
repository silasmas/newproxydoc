<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\acteService>
 */
class ActeServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $actes=["1", "2", "3","5"];
        return [
            'acte_id' => rand(1,30),
            'service_id' => 4,
        ];
    }
}
