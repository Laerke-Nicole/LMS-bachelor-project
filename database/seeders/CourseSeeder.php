<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Evaluation;
use App\Models\FollowUpTest;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // get existing evaluation and follow up test IDs
        $evaluationIds = Evaluation::pluck('id')->toArray();
        $testIds = FollowUpTest::pluck('id')->toArray();

        $operator = Course::create([
            'title' => 'Operator',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'duration_months' => 24,
            'evaluation_id' => $evaluationIds ? $faker->randomElement($evaluationIds) : null,
            'follow_up_test_id' => $testIds ? $faker->randomElement($testIds) : null,
        ]);

        $maintenance = Course::create([
            'title' => 'Maintenance',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'duration_months' => 24,
            'evaluation_id' => $evaluationIds ? $faker->randomElement($evaluationIds) : null,
            'follow_up_test_id' => $testIds ? $faker->randomElement($testIds) : null,
        ]);

        $advancedMaintenance = Course::create([
            'title' => 'Advanced Maintenance',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'duration_months' => 24,
            'evaluation_id' => $evaluationIds ? $faker->randomElement($evaluationIds) : null,
            'follow_up_test_id' => $testIds ? $faker->randomElement($testIds) : null,
        ]);

        $engineerRecipe = Course::create([
            'title' => 'Engineer/recipe',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'duration_months' => 24,
            'evaluation_id' => $evaluationIds ? $faker->randomElement($evaluationIds) : null,
            'follow_up_test_id' => $testIds ? $faker->randomElement($testIds) : null,
        ]);

        return [
            $operator,
            $maintenance,
            $advancedMaintenance,
            $engineerRecipe,
        ];
    }
}
