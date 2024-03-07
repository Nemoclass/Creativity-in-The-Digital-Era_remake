<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin Uneso 1',
            'email' => 'adminuneso1@admin.com',
            'role' => 'admin',
            'password' => Hash::make('aDminsuperuneso'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Admin Uneso 2',
            'email' => 'adminuneso2@admin.com',
            'role' => 'admin',
            'password' => Hash::make('aDminsuperuneso'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Admin Uneso 3',
            'email' => 'adminuneso3@admin.com',
            'role' => 'admin',
            'password' => Hash::make('aDminsuperuneso'),
            'email_verified_at' => now()
        ]);
    }
}
