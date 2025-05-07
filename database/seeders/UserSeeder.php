<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ola',
            'email' => 'ola@oatutors.co.uk',
            'password' => Hash::make('password123'), // You can change the password here
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
