<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('users')->insert([
            // 'name' => 'Franky',
            // 'email' =>'super@gmail.com' ,
            // 'password' => Hash::make('123456'),
            // 'role' => 'super',

        // ]);
        User::create([
            'name' => 'Franky',
            'email' =>'super@gmail.com' ,
            'password' => Hash::make('12345678'),
            'role' => 'super',
        ]);
    }
}
