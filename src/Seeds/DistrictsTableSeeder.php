<?php

namespace Sohel1999\Bdgeocode\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    public function run()
    {
        /* `db_geocode`.`districts` */
        $districts = [
            ['id' => '1','division_id' => '3','name' => 'Dhaka','bn_name' => 'ঢাকা','lat' => '23.71152530','lng' => '90.41114510','website' => 'www.dhaka.gov.bd'],
            ['id' => '2','division_id' => '3','name' => 'Faridpur','bn_name' => 'ফরিদপুর','lat' => '23.60708220','lng' => '89.84294060','website' => 'www.faridpur.gov.bd'],
            ['id' => '3','division_id' => '3','name' => 'Gazipur','bn_name' => 'গাজীপুর','lat' => '24.00228580','lng' => '90.42642830','website' => 'www.gazipur.gov.bd'],
            ['id' => '4','division_id' => '3','name' => 'Gopalganj','bn_name' => 'গোপালগঞ্জ','lat' => '23.00508570','lng' => '89.82660590','website' => 'www.gopalganj.gov.bd'],
            ['id' => '5','division_id' => '8','name' => 'Jamalpur','bn_name' => 'জামালপুর','lat' => '24.93753300','lng' => '89.93777500','website' => 'www.jamalpur.gov.bd'],
            ['id' => '6','division_id' => '3','name' => 'Kishoreganj','bn_name' => 'কিশোরগঞ্জ','lat' => '24.44493700','lng' => '90.77657500','website' => 'www.kishoreganj.gov.bd'],
            ['id' => '7','division_id' => '3','name' => 'Madaripur','bn_name' => 'মাদারীপুর','lat' => '23.16410200','lng' => '90.18968050','website' => 'www.madaripur.gov.bd'],
            ['id' => '8','division_id' => '3','name' => 'Manikganj','bn_name' => 'মানিকগঞ্জ','lat' => '23.86165100','lng' => '90.00032300','website' => 'www.manikganj.gov.bd'],
            ['id' => '9','division_id' => '3','name' => 'Munshiganj','bn_name' => 'মুন্সিগঞ্জ','lat' => '23.49809300','lng' => '90.41266200','website' => 'www.munshiganj.gov.bd'],
            ['id' => '10','division_id' => '8','name' => 'Mymensingh','bn_name' => 'ময়মনসিংহ','lat' => '24.74714900','lng' => '90.42027300','website' => 'www.mymensingh.gov.bd'],
            ['id' => '11','division_id' => '3','name' => 'Narayanganj','bn_name' => 'নারায়াণগঞ্জ','lat' => '23.63366000','lng' => '90.49648200','website' => 'www.narayanganj.gov.bd'],
            ['id' => '12','division_id' => '3','name' => 'Narsingdi','bn_name' => 'নরসিংদী','lat' => '23.93223300','lng' => '90.71541000','website' => 'www.narsingdi.gov.bd'],
            ['id' => '13','division_id' => '8','name' => 'Netrokona','bn_name' => 'নেত্রকোণা','lat' => '24.87095500','lng' => '90.72788700','website' => 'www.netrokona.gov.bd'],
            ['id' => '14','division_id' => '3','name' => 'Rajbari','bn_name' => 'রাজবাড়ি','lat' => '23.75743050','lng' => '89.64446650','website' => 'www.rajbari.gov.bd'],
            ['id' => '15','division_id' => '3','name' => 'Shariatpur','bn_name' => 'শরীয়তপুর','lat' => '23.21970300','lng' => '90.35012600','website' => 'www.shariatpur.gov.bd'],
            ['id' => '16','division_id' => '8','name' => 'Sherpur','bn_name' => 'শেরপুর','lat' => '25.02049330','lng' => '90.01529660','website' => 'www.sherpur.gov.bd'],
            ['id' => '17','division_id' => '3','name' => 'Tangail','bn_name' => 'টাঙ্গাইল','lat' => '24.25134500','lng' => '89.91671000','website' => 'www.tangail.gov.bd'],
            ['id' => '18','division_id' => '5','name' => 'Bogura','bn_name' => 'বগুড়া','lat' => '24.84652280','lng' => '89.37775500','website' => 'www.bogra.gov.bd'],
            ['id' => '19','division_id' => '5','name' => 'Joypurhat','bn_name' => 'জয়পুরহাট','lat' => '25.09473500','lng' => '89.09449400','website' => 'www.joypurhat.gov.bd'],
            ['id' => '20','division_id' => '5','name' => 'Naogaon','bn_name' => 'নওগাঁ','lat' => '24.91316000','lng' => '88.75309500','website' => 'www.naogaon.gov.bd'],
            ['id' => '21','division_id' => '5','name' => 'Natore','bn_name' => 'নাটোর','lat' => '24.42055600','lng' => '89.00028200','website' => 'www.natore.gov.bd'],
            ['id' => '22','division_id' => '5','name' => 'Nawabganj','bn_name' => 'নবাবগঞ্জ','lat' => '24.59650340','lng' => '88.27751220','website' => 'www.chapainawabganj.gov.bd'],
            ['id' => '23','division_id' => '5','name' => 'Pabna','bn_name' => 'পাবনা','lat' => '23.99852400','lng' => '89.23364500','website' => 'www.pabna.gov.bd'],
            ['id' => '24','division_id' => '5','name' => 'Rajshahi','bn_name' => 'রাজশাহী','lat' => '24.36358900','lng' => '88.62413500','website' => 'www.rajshahi.gov.bd'],
            ['id' => '25','division_id' => '5','name' => 'Sirajgonj','bn_name' => 'সিরাজগঞ্জ','lat' => '24.45339780','lng' => '89.70068150','website' => 'www.sirajganj.gov.bd'],
            ['id' => '26','division_id' => '6','name' => 'Dinajpur','bn_name' => 'দিনাজপুর','lat' => '25.62170610','lng' => '88.63545040','website' => 'www.dinajpur.gov.bd'],
            ['id' => '27','division_id' => '6','name' => 'Gaibandha','bn_name' => 'গাইবান্ধা','lat' => '25.32875100','lng' => '89.52808800','website' => 'www.gaibandha.gov.bd'],
            ['id' => '28','division_id' => '6','name' => 'Kurigram','bn_name' => 'কুড়িগ্রাম','lat' => '25.80544500','lng' => '89.63617400','website' => 'www.kurigram.gov.bd'],
            ['id' => '29','division_id' => '6','name' => 'Lalmonirhat','bn_name' => 'লালমনিরহাট','lat' => '25.99234000','lng' => '89.28472500','website' => 'www.lalmonirhat.gov.bd'],
            ['id' => '30','division_id' => '6','name' => 'Nilphamari','bn_name' => 'নীলফামারী','lat' => '25.93179400','lng' => '88.85600600','website' => 'www.nilphamari.gov.bd'],
            ['id' => '31','division_id' => '6','name' => 'Panchagarh','bn_name' => 'পঞ্চগড়','lat' => '26.34110000','lng' => '88.55416060','website' => 'www.panchagarh.gov.bd'],
            ['id' => '32','division_id' => '6','name' => 'Rangpur','bn_name' => 'রংপুর','lat' => '25.75580960','lng' => '89.24446200','website' => 'www.rangpur.gov.bd'],
            ['id' => '33','division_id' => '6','name' => 'Thakurgaon','bn_name' => 'ঠাকুরগাঁও','lat' => '26.03369450','lng' => '88.46168340','website' => 'www.thakurgaon.gov.bd'],
            ['id' => '34','division_id' => '1','name' => 'Barguna','bn_name' => 'বরগুনা','lat' => '22.09529100','lng' => '90.11207000','website' => 'www.barguna.gov.bd'],
            ['id' => '35','division_id' => '1','name' => 'Barishal','bn_name' => 'বরিশাল','lat' => '22.70100200','lng' => '90.35345100','website' => 'www.barisal.gov.bd'],
            ['id' => '36','division_id' => '1','name' => 'Bhola','bn_name' => 'ভোলা','lat' => '22.68592300','lng' => '90.64817900','website' => 'www.bhola.gov.bd'],
            ['id' => '37','division_id' => '1','name' => 'Jhalokati','bn_name' => 'ঝালকাঠি','lat' => '22.17853100','lng' => '90.71010200','website' => 'www.jhalakathi.gov.bd'],
            ['id' => '38','division_id' => '1','name' => 'Patuakhali','bn_name' => 'পটুয়াখালী','lat' => '22.35963160','lng' => '90.32987120','website' => 'www.patuakhali.gov.bd'],
            ['id' => '39','division_id' => '1','name' => 'Pirojpur','bn_name' => 'পিরোজপুর','lat' => '22.57907400','lng' => '89.97592600','website' => 'www.pirojpur.gov.bd'],
            ['id' => '40','division_id' => '2','name' => 'Bandarban','bn_name' => 'বান্দরবান','lat' => '22.19532750','lng' => '92.21837730','website' => 'www.bandarban.gov.bd'],
            ['id' => '41','division_id' => '2','name' => 'Brahmanbaria','bn_name' => 'ব্রাহ্মণবাড়িয়া','lat' => '23.95709040','lng' => '91.11192860','website' => 'www.brahmanbaria.gov.bd'],
            ['id' => '42','division_id' => '2','name' => 'Chandpur','bn_name' => 'চাঁদপুর','lat' => '23.23325850','lng' => '90.67129120','website' => 'www.chandpur.gov.bd'],
            ['id' => '43','division_id' => '2','name' => 'Chattogram','bn_name' => 'চট্টগ্রাম','lat' => '22.33510900','lng' => '91.83407300','website' => 'www.chittagong.gov.bd'],
            ['id' => '44','division_id' => '2','name' => 'Cumilla','bn_name' => 'কুমিল্লা','lat' => '23.46827470','lng' => '91.17881350','website' => 'www.comilla.gov.bd'],
            ['id' => '45','division_id' => '2','name' => 'Cox\'s Bazar','bn_name' => 'কক্স বাজার','lat' => '21.42722800','lng' => '92.00580700','website' => 'www.coxsbazar.gov.bd'],
            ['id' => '46','division_id' => '2','name' => 'Feni','bn_name' => 'ফেনী','lat' => '23.02323100','lng' => '91.38408440','website' => 'www.feni.gov.bd'],
            ['id' => '47','division_id' => '2','name' => 'Khagrachari','bn_name' => 'খাগড়াছড়ি','lat' => '23.11928500','lng' => '91.98466300','website' => 'www.khagrachhari.gov.bd'],
            ['id' => '48','division_id' => '2','name' => 'Lakshmipur','bn_name' => 'লক্ষ্মীপুর','lat' => '22.94247700','lng' => '90.84118400','website' => 'www.lakshmipur.gov.bd'],
            ['id' => '49','division_id' => '2','name' => 'Noakhali','bn_name' => 'নোয়াখালী','lat' => '22.86956300','lng' => '91.09939800','website' => 'www.noakhali.gov.bd'],
            ['id' => '50','division_id' => '2','name' => 'Rangamati','bn_name' => 'রাঙ্গামাটি','lat' => '22.73241700','lng' => '92.29851300','website' => 'www.rangamati.gov.bd'],
            ['id' => '51','division_id' => '7','name' => 'Habiganj','bn_name' => 'হবিগঞ্জ','lat' => '24.37494500','lng' => '91.41553000','website' => 'www.habiganj.gov.bd'],
            ['id' => '52','division_id' => '7','name' => 'Maulvibazar','bn_name' => 'মৌলভীবাজার','lat' => '24.48293400','lng' => '91.77741700','website' => 'www.moulvibazar.gov.bd'],
            ['id' => '53','division_id' => '7','name' => 'Sunamganj','bn_name' => 'সুনামগঞ্জ','lat' => '25.06580420','lng' => '91.39501150','website' => 'www.sunamganj.gov.bd'],
            ['id' => '54','division_id' => '7','name' => 'Sylhet','bn_name' => 'সিলেট','lat' => '24.88979560','lng' => '91.86978940','website' => 'www.sylhet.gov.bd'],
            ['id' => '55','division_id' => '4','name' => 'Bagerhat','bn_name' => 'বাগেরহাট','lat' => '22.65156800','lng' => '89.78593800','website' => 'www.bagerhat.gov.bd'],
            ['id' => '56','division_id' => '4','name' => 'Chuadanga','bn_name' => 'চুয়াডাঙ্গা','lat' => '23.64019610','lng' => '88.84184100','website' => 'www.chuadanga.gov.bd'],
            ['id' => '57','division_id' => '4','name' => 'Jashore','bn_name' => 'যশোর','lat' => '23.16643000','lng' => '89.20811260','website' => 'www.jessore.gov.bd'],
            ['id' => '58','division_id' => '4','name' => 'Jhenaidah','bn_name' => 'ঝিনাইদহ','lat' => '23.54481760','lng' => '89.15392130','website' => 'www.jhenaidah.gov.bd'],
            ['id' => '59','division_id' => '4','name' => 'Khulna','bn_name' => 'খুলনা','lat' => '22.81577400','lng' => '89.56867900','website' => 'www.khulna.gov.bd'],
            ['id' => '60','division_id' => '4','name' => 'Kushtia','bn_name' => 'কুষ্টিয়া','lat' => '23.90125800','lng' => '89.12048200','website' => 'www.kushtia.gov.bd'],
            ['id' => '61','division_id' => '4','name' => 'Magura','bn_name' => 'মাগুরা','lat' => '23.48733700','lng' => '89.41995600','website' => 'www.magura.gov.bd'],
            ['id' => '62','division_id' => '4','name' => 'Meherpur','bn_name' => 'মেহেরপুর','lat' => '23.76221300','lng' => '88.63182100','website' => 'www.meherpur.gov.bd'],
            ['id' => '63','division_id' => '4','name' => 'Narail','bn_name' => 'নড়াইল','lat' => '23.17253400','lng' => '89.51267200','website' => 'www.narail.gov.bd'],
            ['id' => '64','division_id' => '4','name' => 'Satkhira','bn_name' => 'সাতক্ষীরা','lat' => '22.31548100','lng' => '89.11145300','website' => 'www.satkhira.gov.bd']
        ];

        DB::table('districts')->insert($districts);
    }
}
