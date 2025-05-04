<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user with Divisi Produksi role
        User::create([
            'name' => 'Produksi User',
            'email' => 'produksi@indonoodletrack.com',
            'password' => bcrypt('password'),
            'role' => 'Divisi Produksi',
            'user_id' => 'PROD001',
        ]);

        // Create a user with Divisi Gudang role
        User::create([
            'name' => 'Gudang User',
            'email' => 'gudang@indonoodletrack.com',
            'password' => bcrypt('password'),
            'role' => 'Divisi Gudang',
            'user_id' => 'GDG001',
        ]);

        // Create a user with Manager role
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@indonoodletrack.com',
            'password' => bcrypt('password'),
            'role' => 'Manager',
            'user_id' => 'MGR001',
        ]);
    }
}
