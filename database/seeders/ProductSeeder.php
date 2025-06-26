<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     *database seeds
     */
    public function run()
{
    \App\Models\Product::create([
        'name' => 'Laptop',
        'description' => '16GB RAM, 1TB SSD',
        'price' => 1299.99
    ]);
}
}
