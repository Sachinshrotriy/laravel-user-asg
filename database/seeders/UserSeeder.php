<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Amit Sharma', 'email' => 'amit@example.com'],
            ['name' => 'Priya Verma', 'email' => 'priya@example.com'],
            ['name' => 'Rahul Mehra', 'email' => 'rahul@example.com'],
            ['name' => 'Sneha Kapoor', 'email' => 'sneha@example.com'],
            ['name' => 'Ravi Kumar', 'email' => 'ravi@example.com'],
            ['name' => 'Neha Singh', 'email' => 'neha@example.com'],
            ['name' => 'Manish Yadav', 'email' => 'manish@example.com'],
            ['name' => 'Pooja Rani', 'email' => 'pooja@example.com'],
            ['name' => 'Vikas Joshi', 'email' => 'vikas@example.com'],
            ['name' => 'Anjali Nair', 'email' => 'anjali@example.com'],
            ['name' => 'Karan Patel', 'email' => 'karan@example.com'],
            ['name' => 'Divya Saxena', 'email' => 'divya@example.com'],
            ['name' => 'Sandeep Rao', 'email' => 'sandeep@example.com'],
            ['name' => 'Ayesha Khan', 'email' => 'ayesha@example.com'],
            ['name' => 'Nikhil Das', 'email' => 'nikhil@example.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // Default password for all
            ]);
        }
    }
}
