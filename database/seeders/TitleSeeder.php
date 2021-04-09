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

            [
                'name'=>'Get your freebie template now!'
            ],
            [
                'name'=>'Get ( in the lab ) and meet the team'
            ],
            [
                'name'=>'What our clients say'
            ],
            [
                'name'=>'Get in ( the lab ) and see our services'
            ],
            [
                'name'=>'Get in ( the lab ) and see our services'
            ],
            [
                'name'=>'Get in ( the lab ) and discover the world'
            ],

            // 'intro'=>'Get your freebie template now!',

            // 'team'=>'Get / in the lab / and meet the team',

            // 'testimonial'=>'What our clients say',

            // 'servicesHome'=>'Get in / the lab / and see our services',

            // 'pageServices'=>'Get / in the lab / and see our services',
            
            // 'features'=>'Get in / the lab / and discover the world',
        ]);
    }
}
