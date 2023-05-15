<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Str;


class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate users table
        DB::table('users')->truncate();
        // Seed data for admin
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'role' => 'admin',
                'email' => 'john@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin1234#'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'role' => 'user',
                'email' => 'jane@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('User1234#'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'role' => 'superuser',
                'email' => 'bob@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('superuser1234#'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
