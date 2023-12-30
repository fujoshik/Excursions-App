<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizers')->insert([
            [
                'name' => 'Happy Vacations',
                'phone_number' => '1234567890',
                'city' => 'Plovdiv',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Forest Travel',
                'phone_number' => '1234567890',
                'city' => 'Varna',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Rebirth Travel',
                'phone_number' => '1234567890',
                'city' => 'Sofia',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'We Travel',
                'phone_number' => '1234567890',
                'city' => 'Veliko Tarnovo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Travel Bee',
                'phone_number' => '1234567890',
                'city' => 'Burgas',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
