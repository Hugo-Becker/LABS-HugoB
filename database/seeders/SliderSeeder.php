<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'img'=>'01.jpg',
                'text'=>'Get your freebie now ! ',
            ],
            [
                'img'=>'02.jpg',
                'text'=>'Get your Biggy now ! ',
            ],
        ]);
    }
}
