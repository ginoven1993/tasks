<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class,]);

        User::create([
            'name' => 'kodinart',
            'email' => 'gillesrenaud@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt('ginoven93'),
            
        ])->assignRole('superadmin');
    }
}
