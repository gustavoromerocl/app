<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rut' => $this->faker->phoneNumber(),
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'alias' => $this->faker->userName(),
            'email' => $this->faker->email()
        ];
    }
}
