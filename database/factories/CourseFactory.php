<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\FollowUpTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'duration_months' => $this->faker->numberBetween(1, 24),
            'evaluation_id' => Evaluation::inRandomOrder()->value('id'),
            'follow_up_test_id' => FollowUpTest::inRandomOrder()->value('id'),
        ];
    }
}
