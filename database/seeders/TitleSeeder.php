<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'intro'=>'Get your freebie template now!',
            'testimonial'=>'What our clients say',
            'services-home'=>'Get in the lab and see services',
            'page-services'=>'Get in the lab and see services',
            'features'=>'Get in the lab and discover the world',
        ]);
    }
}
