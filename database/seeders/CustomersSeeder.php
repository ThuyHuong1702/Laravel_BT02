<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customer_id' => 001,
                'name' => 'Thuy Huong',
                'email'=> 'abc@gmail.com',
                'phone' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 002,
                'name' => 'Hoa',
                'email'=> 'hoa@gmail.com',
                'phone' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 003,
                'name' => 'Anh',
                'email'=> 'anh@gmail.com',
                'phone' => '093456789',
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}
