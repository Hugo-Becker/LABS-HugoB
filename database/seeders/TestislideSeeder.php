<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestislideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testislides')->insert([
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'01.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'02.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'01.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'02.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'01.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'02.jpg',
                'name'=>'Michael Smith',
                'from'=>'CEO Company'
            ]
           
        ]);
    }
}
