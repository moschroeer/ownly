<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('password'),
            ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Item::factory(15)->create();
        \App\Models\Reservation::factory(5)->create();
    }
}
