<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Add 5 students
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
                'role' => 'student',
                'phone_number' => $faker->phoneNumber,
                'city' => $faker->city,
                'country' => $faker->country,
                'zip_code' => $faker->postcode,
                'description' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Add 5 companies
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'first_name' => '',
                'last_name' => '',
                'email' => $faker->unique()->companyEmail,
                'password' => Hash::make('adminpassword'),
                'role' => 'company',
                'company_name' => $faker->company,
                'company_website' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
