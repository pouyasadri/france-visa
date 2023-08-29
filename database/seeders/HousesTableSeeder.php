<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $numberOfHouses = 10;

        // Create sample blogs
        for ($i = 1; $i <= $numberOfHouses; $i++) {
            DB::table('houses')->insert([
                'house_name' => 'ویلا شیک',
                'house_price' => 1200000,
                'house_description' => 'ویلا فسیح و شیک با مناظر دیدنی.',
                'house_room_count' => 5,
                'house_garage_count' => 2,
                'house_region' => 'مستغلات لوکس',
                'house_postal_code' => '12345',
                'house_exact_location' => 'خیابان درختی ۱۲۳۴، شهر',
                'house_main_image' => 'img.png',
                'house_images' => json_encode(['تصویر1.jpg', 'تصویر2.jpg', 'تصویر3.jpg']),
                'house_type' => 'ویلا',
                'house_status' => 'در دسترس',
            ]);
        }
    }
}
