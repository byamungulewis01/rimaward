<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'BYAMUNGU Lewis',
            'email' => 'byamungulewis@gmail.com',
            'phone' => '0785436135',
            'status' => 'active',
            'password' => 'byamungu', // password
        ]);
        \App\Models\User::factory()->create([
            'name' => 'NIZEYIMANA Daniel',
            'email' => 'nizeyimanadanny11@gmail.com',
            'phone' => '0787214474',
            'status' => 'active',
            'password' => 'nizeyimana', // password
        ]);
    }
}
