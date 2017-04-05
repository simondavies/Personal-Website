<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Page::class, function (Faker\Generator $faker) {
    
    $page_name = $faker->name

    return [
        'parent_id' => $page_name,
        'name' => str_slug($page_name),
        'slug' => $faker->unique()->safeEmail,
        'template' => $password ?: $password = bcrypt('secret'),
        'status' => str_random(10),
    ];
});

$factory->define(App\PageContent::class, function (Faker\Generator $faker) {
    
    $page_title = $faker->sentence

    return [
        'page_id' => $page_name,
        'version_id' => 1,
        'title' => $page_title,
        'body' => $faker->paragraphs(6),
        'excerpt' => $faker->text(200),
        'status' => true,
    ];
});


$factory->define(App\Metadata::class, function (Faker\Generator $faker) {
    
    return [
        'meta_title' => $page_title,
        'meta_description' => $faker->text(150),
        'meta_keywords' => $faker->words(4),
        'facebook_img' => $faker->imageUrl(1200, 630),
        'twitter_img' => $faker->imageUrl(440,220),
        'google_img' => $faker->imageUrl(497,373)
        'instagram_img' => $faker->imageUrl(1080, 1080)
    ];
});
