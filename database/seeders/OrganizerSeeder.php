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
                'city' => 'Plovdiv'
            ],
            [
                'name' => 'Forest Travel',
                'phone_number' => '1234567890',
                'city' => 'Varna'
            ],
            [
                'name' => 'Rebirth Travel',
                'phone_number' => '1234567890',
                'city' => 'Sofia'
            ],
            [
                'name' => 'We Travel',
                'phone_number' => '1234567890',
                'city' => 'Veliko Tarnovo'
            ],
            [
                'name' => 'Travel Bee',
                'phone_number' => '1234567890',
                'city' => 'Burgas'
            ],
        ]);
    }
}
