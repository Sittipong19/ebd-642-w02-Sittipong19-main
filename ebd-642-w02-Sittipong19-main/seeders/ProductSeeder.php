<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert(


            [
                [
                    'name' => 'Nakamichi NMCE110-BK',

                    'category' => 1,

                    'price' => 490.00,

                    'cost_price' => 250.00,

                    'stock' => 5, 'img' => 'img1'
                ], [
                    'name' => 'เฮดโฟน Beats Studio3 Wireless Over‐Ear - สีดําด้าน',

                    'category' => 1,

                    'price' => 490.00,

                    'cost_price' => 330.00,

                    'stock' => 5, 'img' => 'img2'
                ],
                [
                    'name' => 'XM-5C /XM-5Hลําโพงบลูทูธ ทรงกระทัดรัด ดีไซน์หรูหรา Wireless speaker 5W',

                    'category' => 2,

                    'price' => 290.00,

                    'cost_price' => 150.00,

                    'stock' => 5, 'img' => 'img3'
                ],
                [
                    'name' => 'ชุด หัวชาร์จ สายชาร์จ Samsung Micro USB charger Wall Charger adapter white',

                    'category' => 5,

                    'price' => 90.00,

                    'cost_price' => 50.00,

                    'stock' => 5, 'img' => 'img4'
                ],
                [
                    'name' => '[ศูนย์ไทย] 70mai 1S 70Mai Dash Cam Pro 1080P กล้องติดรถยนต์ กล้องบันทึกFull HD Voice',

                    'category' => 3,

                    'price' => 1000.00,

                    'cost_price' => 950.00,

                    'stock' => 5, 'img' => 'img5'
                ],
                [
                    'name' => 'กล้องวงจรปิด Worldtech(เวิร์ลเทค)',

                    'category' => 4,

                    'price' => 1290.00,

                    'cost_price' => 1100.00,

                    'stock' => 5, 'img' => 'img6'
                ],
                [
                    'name' => 'Seagate 2TB',

                    'category' => 8,

                    'price' => 1800.00,

                    'cost_price' => 1700.00,

                    'stock' => 5, 'img' => 'img7'
                ],
                [
                    'name' => 'accer aspire e-533',

                    'category' => 5,

                    'price' => 750.00,

                    'cost_price' => 700.00,

                    'stock' => 5, 'img' => 'img8'
                ],
                [
                    'name' => 'Huawei y6 prime case',

                    'category' => 9,

                    'price' => 100.00,

                    'cost_price' => 90.00,

                    'stock' => 5, 'img' => 'img9'
                ],
                [
                    'name' => ' huawei y7 prime case ',

                    'category' => 9,

                    'price' => 50.00,

                    'cost_price' => 50.00,

                    'stock' => 4, 'img' => 'img10'
                ]

            ]

        );
    }
}
