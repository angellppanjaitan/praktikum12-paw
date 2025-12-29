<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create Regular User
        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'user',
        ]);

        // Create Sample Products
        \App\Models\Product::create([
            'name' => 'Laptop ASUS ROG',
            'price' => 15000000,
            'stock' => 10,
            'sku' => 'LAP-ROG-001',
        ]);

        \App\Models\Product::create([
            'name' => 'Mouse Logitech G502',
            'price' => 800000,
            'stock' => 50,
            'sku' => 'MOU-LOG-002',
        ]);
    }
}
