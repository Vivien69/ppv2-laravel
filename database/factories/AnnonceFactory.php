<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Marchand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => fake()->numberBetween(0,5),
            'code' => fake()->sentence(20),
            'lien' => fake()->url(),
            'content' => fake()->paragraph(10),
            'bonus' =>fake()->randomFloat(1, 2, 50),
            'etat' => fake()->numberBetween(0,1),            
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'marchand_id' => Marchand::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
