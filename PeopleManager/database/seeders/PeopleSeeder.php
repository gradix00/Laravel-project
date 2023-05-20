<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'Age' => rand(18, 100),
                'PhoneNumber' => $faker->phoneNumber,
                'Street' => $faker->streetName,
                'City' => $faker->city,
                'Country' => $faker->country
            ]);
        }
    }
}
