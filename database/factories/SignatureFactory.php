<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SignatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'evaluation_id' => Evaluation::inRandomOrder()->first()->id,
            'signed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_signed' => $this->faker->boolean(70),
        ];
    }
}
