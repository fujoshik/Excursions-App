<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExcursionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('excursions')->insert([
            [
                'name' => 'Trip to Venice',
                'start' => '2024-03-12 09:00:00',
                'duration_in_days' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'China Excursion',
                'start' => '2024-04-15 02:00:00',
                'duration_in_days' => 7,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Visit Hong Kong',
                'start' => '2024-07-21 02:00:00',
                'duration_in_days' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Ancient Asia',
                'start' => '2024-05-03 04:00:00',
                'duration_in_days' => 12,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Visit the Alps',
                'start' => '2024-06-17 08:00:00',
                'duration_in_days' => 8,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
