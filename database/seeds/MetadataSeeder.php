<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $facebook_img = $faker->imageUrl(1200, 630);
        $twitter_img = $faker->imageUrl(440, 220);
        $google_img = $faker->imageUrl(497, 373);
        $instagram_img = $faker->imageUrl(1080, 1080);

        DB::table('metadata')->delete();

		DB::statement("ALTER TABLE metadata AUTO_INCREMENT = 1");


        DB::table('metadata')->insert([
            [
                'title' => 'Welcome to the site of Davies',
                'description' => 'The website of simon davies, a show case and...',
                'keywords' => 'home, homepage, landing, landing page',
                'facebook_img' => $facebook_img,
                'twitter_img' => $twitter_img,
                'google_img' => $google_img,
                'instagram_img' => $instagram_img,
                'metadatable_id' => 1,
                'metadatable_type' => 'App\Page',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Simon Davies on cookies and why?',
                'description' => 'Cookies',
                'keywords' => 'cookies, cookies policy',
                'facebook_img' => $facebook_img,
                'twitter_img' => $twitter_img,
                'google_img' => $google_img,
                'instagram_img' => $instagram_img,
                'metadatable_id' => 2,
                'metadatable_type' => 'App\Page',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}