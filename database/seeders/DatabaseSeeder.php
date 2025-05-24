<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name' => 'Rafi Alif Azhar',
            'email' => 'rafipilo73@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pilo12345'),
            'remember_token' => Str::random(10),
            'is_admin' => false,
        ]);

        User::factory(100)->create();
        Category::factory(10)->create();
        Todo::factory(500)->create();
    }
}
