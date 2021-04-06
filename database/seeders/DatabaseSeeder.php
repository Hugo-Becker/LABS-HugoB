<?php

namespace Database\Seeders;

use App\Models\ArticleTag;
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
            PosteSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            ArticleTagSeeder::class,
            LogoSeeder::class,
            SliderSeeder::class,
            ServiceSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            ContactMailSeeder::class,
            ContactPhoneSeeder::class,
            ContactAdressSeeder::class,
            FooterSeeder::class,
            MemberSeeder::class,
            PromotionSeeder::class,
            ServiceCardSeeder::class,
            TestislideSeeder::class,
            TitleSeeder::class,
            IconSeeder::class,
        ]);
    }
}
