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
                'start' => '03-12-2024 09:00:00 AM',
                'duration' => 4
            ],
            [
                'name' => 'China Excursion',
                'start' => '04-15-2024 02:00:00 AM',
                'duration' => 7
            ],
            [
                'name' => 'Visit Hong Kong',
                'start' => '07-21-2024 02:00:00 AM',
                'duration' => 5
            ],
            [
                'name' => 'Ancient Asia',
                'start' => '05-03-2024 04:00:00 AM',
                'duration' => 12
            ],
            [
                'name' => 'Visit the Alps',
                'start' => '06-17-2024 08:00:00 AM',
                'duration' => 8
            ],
        ]);
    }
}
