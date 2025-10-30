<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Training;

class TrainingUserSeeder extends Seeder
{
    public function run()
    {
        $users     = User::all();
        $trainings = Training::pluck('id')->toArray();

        foreach ($users as $user) {
            // Each user joins 1–2 random trainings
            $randomTrainings = collect($trainings)->random(rand(1, 2))->toArray();
            $user->trainings()->attach($randomTrainings);
        }
    }
}
