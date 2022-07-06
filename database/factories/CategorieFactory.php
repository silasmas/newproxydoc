<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categorie>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tab=["Cardilogie","Dentisterie","Laboratoire","Ophtamologie","Ginecologie","Dermatologie"];
        return [
            'nom' => $this->faker->randomElement($tab),
            'description' => $this->faker->paragraph,
        ];
    }
}
