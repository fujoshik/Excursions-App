<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transports')->insert([
            [
                'vehicle' => 'car',
                'company_name' => 'Commutopia'
            ],
            [
                'vehicle' => 'bus',
                'company_name' => 'Road Wizards'
            ],
            [
                'vehicle' => 'ferry',
                'company_name' => 'Transportify'
            ],
            [
                'vehicle' => 'boat',
                'company_name' => 'All-Weather Carriers'
            ],
            [
                'vehicle' => 'plane',
                'company_name' => 'FlyAway'
            ],
        ]);
    }
}
