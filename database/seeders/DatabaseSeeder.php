<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task_type;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Reynard',
            'email' => 'reynard@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Delai',
            'email' => 'delai@example.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        Task_type::create([
            'name' => 'university',
            'color' => 'red'
        ]);

        Task_type::create([
            'name' => 'free time',
            'color' => 'green'
        ]);

        Task_type::create([
            'name' => 'contest',
            'color' => 'blue'
        ]);

        Task_type::create([
            'name' => 'others',
            'color' => 'yellow'
        ]);
    }
}
