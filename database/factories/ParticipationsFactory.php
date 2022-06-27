<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participations>
 */
class ParticipationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'firstname' => $this->faker->firstname(),
            'city' => $this->faker->city(),
            'gift' => $this->faker->word(),
            'question1' => $this->faker->text(),
            'question2' => $this->faker->text(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */

}
