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
    public function run()
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'High Performance Laptop',
                'category_id' => 1,
                'price' => 800.00,
                'cost_price' => 600.00,
            ],

            [
                'name' => 'Office Chair',
                'description' => 'High Quality and Soft',
                'category_id' => 2,
                'price' => 120.00,
                'cost_price' => 80.00,
            ]
            ]);
    }
}
