<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kenchase',
            'email' => 'calvinsken89@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Feature::create([
            'image' => 'https://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'This feature allows you to calculate the sum of two numbers.',
            'required_credits' => 1,
            'is_active' => true,
        ]);

        Feature::create([
            'image' => 'https://cdn-icons-png.freepik.com/512/929/929430.png',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Sum',
            'description' => 'This feature allows you to calculate the sum of two numbers.',
            'required_credits' => 3,
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}
