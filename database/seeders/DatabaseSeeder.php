<?php

namespace Database\Seeders;

use App\Models\ContactAdress;
use App\Models\ContactMail;
use App\Models\ContactPhone;
use App\Models\Footer;
use App\Models\Service;
use App\Models\ServiceCard;
use App\Models\Testislide;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SliderSeeder::class,
            ServiceSeeder::class,
            AboutSeeder::class,
            ArticleSeeder::class,
            CategorySeeder::class,
            ContactSeeder::class,
            ContactMail::class,
            ContactPhone::class,
            ContactAdress::class,
            FooterSeeder::class,
            MemberSeeder::class,
            PromotionSeeder::class,
            ServiceCardSeeder::class,
            TagSeeder::class,
            TestislideSeeder::class,
            TitleSeeder::class
        ]);
    }
}
