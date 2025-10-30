<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Email;

class EmailUserSeeder extends Seeder
{
    public function run()
    {
        $users  = User::all();
        $emails = Email::pluck('id')->toArray();

        foreach ($users as $user) {
            // every user gets 1–3 random mails
            $randomEmails = collect($emails)->random(rand(1, 3))->toArray();
            $user->emails()->attach($randomEmails);
        }
    }
}
