<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JobPostingsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('job_postings')->insert([
                'user_id' => rand(6, 10), // Assuming company users have IDs 6-10
                'title' => $faker->jobTitle,
                'employment_type' => $faker->randomElement(['full-time', 'part-time', 'contract']),
                'job_description' => $faker->paragraph,
                'location' => $faker->city . ', ' . $faker->state,
                'salary_min' => $faker->numberBetween(30000, 50000),
                'salary_max' => $faker->numberBetween(50001, 80000),
                'status' => $faker->randomElement(['open', 'closed', 'on-hold']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
