<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Certificate;
use App\Models\Company;
use App\Models\Email;
use App\Models\Evaluation;
use App\Models\FollowUpMaterial;
use App\Models\FollowUpTest;
use App\Models\Gdpr;
use App\Models\PostalCode;
use App\Models\Preparation;
use App\Models\Requirement;
use Database\Factories\SignatureFactory;
use Database\Factories\UserTestResultFactory;
use App\Models\Site;
use App\Models\Training;
use \App\Models\User;
use \App\Models\EmailUser;
use \App\Models\TrainingUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PostalCode::factory(30)->create();
        Address::factory(50)->create();
        Company::factory(10)->create();
        User::factory(50)->create();
        Site::factory(50)->create();
        Gdpr::factory(50)->create();
        Certificate::factory(10)->create();
        Email::factory(20)->create();
        $this->call(CourseSeeder::class);
        Evaluation::factory(20)->create();
        FollowUpTest::factory(4)->create();
        Training::factory(100)->create();
        FollowUpMaterial::factory(20)->create();
        Preparation::factory(20)->create();
        Requirement::factory(10)->create();
        SignatureFactory::new()->count(50)->create();
        UserTestResultFactory::new()->count(50)->create();
        EmailUser::factory(100)->create();
        TrainingUser::factory(100)->create();

        //  seeders
        $this->call([
            PostalCodeSeeder::class,
            AddressSeeder::class,
            AbInventechSeeder::class,
        ]);
    }
}
