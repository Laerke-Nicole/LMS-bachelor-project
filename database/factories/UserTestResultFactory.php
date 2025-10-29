<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserTestResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_passed' => $this->faker->boolean(70),
            'completed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
