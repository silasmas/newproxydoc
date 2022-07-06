<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => Str::slug($this->faker->name),
            'prix' =>  $this->faker->randomElement([1,5,10,2]),
            'monaie' =>  $this->faker->randomElement(["$", "FC"]),
            'description' => $this->faker->paragraph,
            'quantite' => $this->faker->randomElement([10,50,100,20,40,70,500]),
            'slug' =>  Str::slug($this->faker->name),
        ];
    }
}
