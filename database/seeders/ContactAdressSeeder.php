<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactAdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_adresses')->insert([
            [
                'street'=>'Rue de Rome, 13',
                'city'=>'Bruxelles',
            ]
        ]);
    }
}
