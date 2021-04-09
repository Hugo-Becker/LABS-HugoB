<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Bastien Huplo',
                'email'=>'a@a.com',
                'role_id'=>1,
                'poste_id'=>1,
                'img'=>'01.jpg',
                'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
                ',
                'password'=>'aaaaaaaa',
                'validate'=>1,
            ],
            [
                'name'=>'Micgel Bascef',
                'email'=>'w@w.com',
                'role_id'=>2,
                'poste_id'=>2,
                'img'=>'02.jpg',
                'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
                ',
                'password'=>'aaaaaaaa',
                'validate'=>1,

            ],
            [
                'name'=>'Louis Pastouf',
                'email'=>'r@r.com',
                'role_id'=>3,
                'poste_id'=>3,

                'img'=>'03.jpg',
                'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
                ',
                'password'=>'aaaaaaaa',
                'validate'=>1,

            ],

        ]);
    }
}
