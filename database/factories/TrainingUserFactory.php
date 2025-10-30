<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Training;

class TrainingUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'  => User::inRandomOrder()->value('id'),
            'training_id' => Training::inRandomOrder()->value('id'),
        ];
    }
}
