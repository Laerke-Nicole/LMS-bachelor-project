<?php

namespace Database\Seeders;

use App\Models\AbInventech;
use App\Models\Address;
use App\Models\Certificate;
use App\Models\Company;
use App\Models\Course;
use App\Models\Email;
use App\Models\Evaluation;
use App\Models\FollowUpMaterial;
use App\Models\FollowUpTest;
use App\Models\Gdpr;
use App\Models\PostalCode;
use App\Models\Preparation;
use \App\Models\Product;
use App\Models\Requirement;
use App\Models\Site;
use App\Models\Training;
use \App\Models\User;
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
        User::factory(50)->create();
        Company::factory(10)->create();
        Site::factory(50)->create();
        Gdpr::factory(50)->create();
        Certificate::factory(10)->create();
        Email::factory(20)->create();
        Evaluation::factory(20)->create();
        FollowUpTest::factory(4)->create();
        Course::factory(4)->create();
        Training::factory(50)->create();
        FollowUpMaterial::factory(20)->create();
        Preparation::factory(20)->create();
        Requirement::factory(10)->create();
        Product::factory(50)->create();

        //  seeders
        $this->call([
            PostalCodeSeeder::class,
            AddressSeeder::class,
            AbInventechSeeder::class,
        ]);
    }
}
