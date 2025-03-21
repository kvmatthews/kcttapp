<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BranchSeeder::class,
        ]);

        $this->call([
            CustomerSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@email.com',
            'password' => Hash::make('qwerty123'),
        ]);

        for ($i = 1; $i <= 9; $i++) {
            User::factory()->create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@email.com',
                'password' => Hash::make('password' . $i),
            ]);
        }
    }
}
