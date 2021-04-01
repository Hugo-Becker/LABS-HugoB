<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Art'
            ],
            [
                'name'=>'Science'
            ],
            [
                'name'=>'Food'
            ],
            [
                'name'=>'Life Style'
            ],
            [
                'name'=>'Mood'
            ],
        ]);
    }
}
