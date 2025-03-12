<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('order_detail')->insert([
            [
                'order_id' => 1000,
                'product_id' => 100,
                'name' => 'milk',
                'price' => 500.00,
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1000,
                'product_id' => 101,
                'name' => 'tea',
                'price' => 100.00,
                'discount' => 5.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1001,
                'product_id' => 101,
                'name' => 'tea',
                'price' => 100.00,
                'discount' => 5.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1002,
                'product_id' => 103,
                'name' => 'skin care',
                'price' => 1000.00,
                'discount' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1003,
                'product_id' => 100,
                'name' => 'milk',
                'price' => 500.00,
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1004,
                'product_id' => 102,
                'name' => 'clothes',
                'price' => 543.00,
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1003,
                'product_id' => 104,
                'name' => 'TV',
                'price' => 54500.00,
                'discount' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
