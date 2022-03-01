<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app('db')->table('brand')->insert(array([
            'nameen' => 'หัวเว่ย',
            'nameth' => 'Huawei',
            'log' => 'logo1',
            'url' => 'https://www.huawei.com/en/',
        ], [
            'nameen' => 'แอปเปิล',
            'nameth' => 'Apple',
            'log' => 'logo2',
            'url' => 'https://www.apple.com',
        ], [
            'nameen' => 'อินเทล',
            'nameth' => 'Intel',
            'log' => 'logo3',
            'url' => 'https://www.intel.com/content/www/us/en/homepage.html',
        ], [
            'nameen' => 'แคนนอน',
            'nameth' => 'Canon',
            'log' => 'logo4',
            'url' => 'https://th.canon',
        ], [
            'nameen' => 'ไมโครซอฟต์',
            'nameth' => 'Microsoft',
            'log' => 'logo5',
            'url' => 'https://www.microsoft.com/th-th/',
        ], [
            'nameen' => 'ไอบีเอ็ม',
            'nameth' => 'IBM',
            'log' => 'logo6',
            'url' => 'https://www.ibm.com/th-en',
        ], [
            'nameen' => 'เลอโนโว',
            'nameth' => 'Lenovo',
            'log' => 'logo7',
            'url' => 'https://www.lenovo.com/th/en/',
        ], [
            'nameen' => 'ฟูจิฟิล์ม',
            'nameth' => 'FujiFilm',
            'log' => 'logo8',
            'url' => 'https://www.fujifilm.com/th/th',
        ], [
            'nameen' => 'นิคอน',
            'nameth' => 'Nikon',
            'log' => 'logo9',
            'url' => 'https://www.nikon.com',
        ], [
            'nameen' => 'วีโว่ ',
            'nameth' => 'Vivo',
            'log' => 'logo10',
            'url' => 'https://www.vivo.com/th',
        ]));
    }
}
