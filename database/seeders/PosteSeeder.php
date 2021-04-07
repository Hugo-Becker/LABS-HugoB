<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            [
                'name'=>'PDG'
            ],
            [
                'name'=>'Web Designer'
            ],
            [
                'name'=>'Communication Manager'
            ],
            [
                'name'=>'Senior Developper'
            ],
            [
                'name'=>'Junior Developper'
            ],
            [
                'name'=>'Team Manager'
            ],
        
        ]);
    }
}
