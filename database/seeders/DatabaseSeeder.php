<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // \App\Models\User::factory()->create();
        // User::create(
        //     [
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('a'),
        //     'remember_token' => Str::random(10),
        //     'outlet_id' =>1,
        //     'role' => 'admin'
        //     ]);
        //     User::create(
        //     [
        //     'name' => 'Kasir',
        //     'email' => 'kasir@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('a'),
        //     'remember_token' => Str::random(10),
        //     'outlet_id' =>1,
        //     'role' => 'kasir'
        //     ]);
        //     User::create(
        //     [
        //     'name' => 'Owner',
        //     'email' => 'owner@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('a'),
        //     'remember_token' => Str::random(10),
        //     'outlet_id' =>1,
        //     'role' => 'owner'
        //      ]);
    }
}
