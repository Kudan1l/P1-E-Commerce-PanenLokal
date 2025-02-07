<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Wortel Jumbo',
                'slug' => 'wortel-jumbo',
                'price' => '8500',
                'stock' => '20',
                'image' => 'https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'Bayam',
                'slug' => 'kangkung',
                'price' => '6500',
                'stock' => '30',
                'image' => 'https://images.unsplash.com/photo-1578283326173-fbb0f83b59b2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'Selada',
                'slug' => 'selada',
                'price' => '9000',
                'stock' => '15',
                'image' => 'https://images.unsplash.com/photo-1533321942807-08e4008b2025?q=80&w=1959&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'Brokoli',
                'slug' => 'brokoli',
                'price' => '6000',
                'stock' => '11',
                'image' => 'https://plus.unsplash.com/premium_photo-1702403157830-9df749dc6c1e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                "updated_at" => now(),
            ],

        ]);
    }
}
