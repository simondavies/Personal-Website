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
        $facebook_img = 'simon-davies-facebook-share-image.jpg';
        $twitter_img = 'simon-davies-twitter-share-image.jpg';
        $google_img = 'simon-davies-google-plus-share-image.jpg';
        $instagram_img = 'simon-davies-instagram-share-image.jpg';

        DB::table('metadata')->delete();

		DB::statement("ALTER TABLE metadata AUTO_INCREMENT = 1");


        DB::table('metadata')->insert([
            [
                'title' => 'Simon Davies - Web Developer / Designer',
                'description' => 'A developer of the Web, but not the spider kind.',
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
                'title' => 'Cookies on my site and why?',
                'description' => 'Cookies are small text files that reside on your computer/mobile, when visiting a website.',
                'keywords' => 'cookies, cookies policy',
                'facebook_img' => $facebook_img,
                'twitter_img' => $twitter_img,
                'google_img' => $google_img,
                'instagram_img' => $instagram_img,
                'metadatable_id' => 2,
                'metadatable_type' => 'App\Page',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Outdated Brower',
                'description' => 'Your using an out of date browser, please update to experience my site.',
                'keywords' => 'update browser, browser, outdated browser',
                'facebook_img' => $facebook_img,
                'twitter_img' => $twitter_img,
                'google_img' => $google_img,
                'instagram_img' => $instagram_img,
                'metadatable_id' => 3,
                'metadatable_type' => 'App\Page',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}