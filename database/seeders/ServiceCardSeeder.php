<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_cards')->insert([
            [
                'img'=>'card-1.jpg'
            ],
            [
                'img'=>'card-2.jpg'
            ],
            [
                'img'=>'card-3.jpg'
            ],
        ]);
    }
}
