<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::insert([
            ['product_id' => 1, 'quantity' => 50, 'reorder_point' => 10],
            ['product_id' => 2, 'quantity' => 20, 'reorder_point' => 5],
        ]);
    }
}
