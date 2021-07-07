<?php

namespace Sohel1999\Bdgeocode\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    public function run()
    {
        /* `db_geocode`.`divisions` */
        $divisions = [
            ['id' => '1', 'name' => 'Barishal', 'bn_name' => 'বরিশাল', 'lat' => '22.70100200', 'lng' => '90.35345100'],
            ['id' => '2', 'name' => 'Chattogram', 'bn_name' => 'চট্টগ্রাম', 'lat' => '22.35685100', 'lng' => '91.78318200'],
            ['id' => '3', 'name' => 'Dhaka', 'bn_name' => 'ঢাকা', 'lat' => '23.78062070', 'lng' => '90.34928600'],
            ['id' => '4', 'name' => 'Khulna', 'bn_name' => 'খুলনা', 'lat' => '22.84564100', 'lng' => '89.54032800'],
            ['id' => '5', 'name' => 'Rajshahi', 'bn_name' => 'রাজশাহী', 'lat' => '24.36358900', 'lng' => '88.62413500'],
            ['id' => '6', 'name' => 'Rangpur', 'bn_name' => 'রংপুর', 'lat' => '25.74389200', 'lng' => '89.27522700'],
            ['id' => '7', 'name' => 'Sylhet', 'bn_name' => 'সিলেট', 'lat' => '24.89492900', 'lng' => '91.86870600'],
            ['id' => '8', 'name' => 'Mymensingh', 'bn_name' => 'ময়মনসিংহ', 'lat' => '24.74714900', 'lng' => '90.42027300'],
        ];

        DB::table('divisions')->insert($divisions);
    }
}
