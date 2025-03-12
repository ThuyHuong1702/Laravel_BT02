<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_id' => 100,
                'name' => 'milk',
                'price' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 101,
                'name' => 'tea',
                'price' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 102,
                'name' => 'clothes',
                'price' => 543.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 103,
                'name' => 'skin care',
                'price' => 1000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 104,
                'name' => 'TV',
                'price' => 54500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

    }
}
