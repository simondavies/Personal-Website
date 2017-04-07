<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        DB::statement("ALTER TABLE pages AUTO_INCREMENT = 1");

        DB::table('pages')->insert([
            [
                //'uuid' => pack("h*", str_replace('-', '', '8c837d49-e061-4169-806a-8bc54ddb9bba')),
                'uuid' => '24f6c768-6276-4f34-bfa1-e7c8ba9514ea',
                'parent_id' => 0,
                'name' => 'Homepage',
                'slug' => str_slug(''),
                'template' => 'home-page',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'uuid' => '55635d83-10bc-424f-bf3f-395ea7a5b47F',
                //'uuid' => pack("h*", str_replace('-', '', '24f6c768-6276-4f34-bfa1-e7c8ba9514ea')),
                'parent_id' => 0,
                'name' => 'Cookies',
                'slug' => str_slug('cookies'),
                'template' => 'base-page',
                'status' => true,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
