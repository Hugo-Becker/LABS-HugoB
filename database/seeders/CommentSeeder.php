<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ',

                'article_id'=>1,

                'fromName'=>'Michael Smith',
                
                'fromMail'=>'michael@gmail.com',

                'user_id'=>NULL,

                'check'=>true,

            ],
            [
                'content'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ',

                'article_id'=>1,

                'fromName'=>'Waw',
                
                'fromMail'=>'michael@gmail.com',

                'user_id'=>2,

                'check'=>true,


            ],
           
         
        ]);
    }
}
