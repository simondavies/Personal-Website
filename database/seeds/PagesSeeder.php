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
                'parent_id' => 0,
                'name' => 'Homepage',
                'slug' => str_slug(''),
                'template' => 'home-page',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'parent_id' => 0,
                'name' => 'Cookies',
                'slug' => str_slug('cookies'),
                'template' => 'base-page',
                'status' => true,
                'created_at' => Carbon::now()
            ],
            [
                'parent_id' => 0,
                'name' => 'Browser Update',
                'slug' => str_slug('update'),
                'template' => 'base-page',
                'status' => true,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
