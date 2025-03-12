<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'order_id' => 1000,
                'employee_id' => 010,
                'customer_id' => 001,
                'order_days' => now(),
                'order_address' => 'Van Phuc, Ha DongDong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1001,
                'employee_id' => 010,
                'customer_id' => 001,
                'order_days' => '2025-02-11',
                'order_address' => 'Van Phuc, Ha DongDong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1002,
                'employee_id' => 010,
                'customer_id' => 002,
                'order_days' => now(),
                'order_address' => 'Ha Dong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1003,
                'employee_id' => 011,
                'customer_id' => 002,
                'order_days' => '2025-03-04',
                'order_address' => 'cau giay, ha noi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1004,
                'employee_id' => 012,
                'customer_id' => 003,
                'order_days' => now(),
                'order_address' => 'Nam tu liem',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
