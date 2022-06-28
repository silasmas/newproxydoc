<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $services=[
            "ProxyChat",
            "ProxyChem",
            "ProxyGency",
            "ProxyFamily"];
        $prix=["1", "2", "3","5"];
        return [
            'nom' => $this->faker->randomElement($services),
            'description' => $this->faker->paragraph,
            'prix' => $this->faker->randomElement($prix),
            'monaie' => 'USD',
        ];
    }
}
