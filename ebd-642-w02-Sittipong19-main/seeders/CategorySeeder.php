<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app('db')->table('category')->insert(array(

            ['name' => 'หูฟัง'],
            
            ['name' => 'ลำโพง'],
            
            ['name' => 'กล้องติดรถยนต์'],
            
            ['name' => 'กล้องวงจรปิด'],
            
            ['name' => 'ที่ชาร์ต/สายชาร์ต'],
            
            ['name' => 'โน๊ตบุ๊ค'],

            ['name' => 'กระเป๋าโน๊ตบุ๊ค'],

            ['name' => 'External Hard Disk'],

            ['name' => 'Case'],
            
            ['name' => 'ระบบกันขโมย'],
            
            ));
    }
}
