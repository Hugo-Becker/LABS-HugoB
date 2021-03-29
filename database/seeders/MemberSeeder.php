<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name'=>'Christinne Williams',
                'function'=>'Project Manager',
                'img'=>'1.jpg',
            ],
            [
                'name'=>'Christinne Williams',
                'function'=>'Junior developer',
                'img'=>'2.jpg',
            ],
            [
                'name'=>'Christinne Williams',
                'function'=>'Digital designer',
                'img'=>'3.jpg',
            ],
        ]);
    }
}
