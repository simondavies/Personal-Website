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
                'version_id' => 1,
                'title' => 'Homepage',
                'body' => '',
                'excerpt' => '',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'page_id' => 2,
                'version_id' => 1,
                'title' => 'Cookies on my Site',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, voluptatibus! Cumque natus quas quasi quibusdam, id sint, officia obcaecati eos sapiente libero molestias recusandae, placeat quis esse non cum sit.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, voluptatibus! Cumque natus quas quasi quibusdam, id sint, officia obcaecati eos sapiente libero molestias recusandae, placeat quis esse non cum sit.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, voluptatibus! Cumque natus quas quasi quibusdam, id sint, officia obcaecati eos sapiente libero molestias recusandae, placeat quis esse non cum sit.</p>',
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, voluptatibus! Cumque natus quas quasi quibusdam, id...',
                'status' => true,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
