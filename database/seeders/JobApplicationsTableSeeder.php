<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JobApplicationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('job_applications')->insert([
                'user_id' => rand(1, 5), // Assuming student users have IDs 1-5
                'job_posting_id' => rand(1, 10), // Assuming job postings have IDs 1-10
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
