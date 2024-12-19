<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a single user
        User::create([
            'name' => 'irhamzaf',
            'email' => 'irhamzaf01@gmail.com',
            'password' => Hash::make('P@ssw0rd12345'), // Use a hashed password
            'role' => 'student', // Default role
        ]);
    }
}
