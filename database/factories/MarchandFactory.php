<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marchand>
 */
class MarchandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){

        return [
            'name' => fake()->unique()->name(),
            'slug' => fake()->slug(),
            'url' => fake()->url(),
            'url_conditions' => fake()->url(),
            'picture' => fake()->image(),
            'offers' => fake()->sentence(20),
            'content' => fake()->paragraph(10),
            'foncparrainage' =>fake()->sentence(9),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'categorie_id' => Categorie::all()->random()->id
        ];
    }
}
