<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'employee_id' => 010,
                'name' => 'Hai Hoang',
                'start_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 011,
                'name' => 'Dang ha',
                'start_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 012,
                'name' => 'Thuy Van',
                'start_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
