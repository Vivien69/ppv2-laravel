<?php

namespace Database\Factories;

use App\Models\Marchand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offres>
 */
class OffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'f_remise' => fake()->numberBetween(0,100),
            'f_devise' => fake()->randomElement(['€', '%', '$', 'minutes', 'mois', 'jours', 'points']),
            'f_mini' => fake()->numberBetween(0,60),
            'f_content' => fake()->sentence(),
            'p_remise' => fake()->numberBetween(0,100),
            'p_devise' => fake()->randomElement(['€', '%', '$', 'minutes', 'mois', 'jours', 'points']),
            'p_mini' => fake()->numberBetween(0,60),
            'p_content' => fake()->sentence(),
            'start_at' => fake()->dateTime(),
            'marchand_id' => Marchand::all()->random()->id
        ];
    }
}
