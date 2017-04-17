<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PagesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages_content')->delete();

        DB::statement("ALTER TABLE pages_content AUTO_INCREMENT = 1");

        DB::table('pages_content')->insert([
            [
                'page_id' => 1,
                'revision' => 1,
                'title' => 'Homepage',
                'body' => '',
                'excerpt' => '',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'page_id' => 2,
                'revision' => 1,
                'title' => 'Cookies on my Site',
                'body' => '<p>Cookies are small text files that reside on your computer/mobile, when visiting a website. I currently have minimal cookie use, and mainly use them on my site to gather analytics data, so I can better understand how users use my website.</p><p><b>Third party cookies</b></p><p><b>Google Analytics</b></p><p>I use analytical cookies to allow me, to give me a better understanding of how people who visit my site, use it. This can help me to improve the way my website works.</p><p>Google Analytics cookies do not collect personal data about website visitors.</p><p>Visit <a href="http://www.google.com/intl/en/privacypolicy.html" target="_blank">www.google.com</a> for more details.</p><p><b>Youtube/Vimeo</b></p><p>I may use video embed code / links through out my website, which may in-turn contain their own cookies.</p><p>For more details on their use please visit:</p><p><a href="http://www.youtube.com/t/privacy_at_youtube" target="_blank">www.youtube.com</a></p><p><a href="https://vimeo.com/cookie_policy" target="_blank"> vimeo.com </a></p><p><b>How do I reject and delete cookies?</b></p><p>I will not use cookies to collect personally identifiable information about you. If you would still like to review, disable or delete cookies, please read more here <a href="http://cookies.insites.com/disable-cookies/" target="_blank">cookies.insites.com</a></p>',
                'excerpt' => 'Cookies are small text files that reside on your computer/mobile, when visiting a website.  I currently have minimal cookie use, and mainly use them on my site to gather analytics data..',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'page_id' => 3,
                'revision' => 1,
                'title' => 'Browser Update',
                'body' => '<p>Looks like you have or are using an out of date browser, that I feel does not need me to support.  This is due to the age of that browser or the lasck of modern code support.</p><p>Please visit the following link, to get a list of all the current modern browsers,<br />that are available to use <a href="http://outdatedbrowser.com/" target="_blank">outdatedbrowser.com</a></p>',
                'excerpt' => 'Please update your browser, as I do not support your current browser...',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'page_id' => 3,
                'revision' => 1,
                'title' => 'Page Error',
                'body' => '<p>Looks like there is an error at the moment, and i have not had time to even sort out the page...</p>',
                'excerpt' => 'Page currently not available...',
                'status' => true,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
