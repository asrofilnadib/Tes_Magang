<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use Database\Factories\BookFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'email_verified_at' => now(),
           'remember_token' => Str::random(10),
           'password' => Hash::make('adminpassword'),
         ]);

         User::factory(3)->create();

         BookFactory::new()->count(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
