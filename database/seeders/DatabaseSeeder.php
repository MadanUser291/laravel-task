<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'role' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'phone_number' => '123-456-7890',
            'gender' => 'Male',
            'address' => '123 Admin St',
            'street' => 'Admin Street',
            'city' => 'Admin City',
            'state' => 'Admin State',
            'country' => 'Admin Country',
            'postal_code' => '12345',
            'status' => 'Active',
        ]);

        User::create([
            'role' => 'user',
            'first_name' => 'First',
            'last_name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'phone_number' => '123-456-7890',
            'gender' => 'Male',
            'address' => '123 user St',
            'street' => 'user Street',
            'city' => 'user City',
            'state' => 'user State',
            'country' => 'user Country',
            'postal_code' => '12345',
            'status' => 'Active',
        ]);
    }
}
