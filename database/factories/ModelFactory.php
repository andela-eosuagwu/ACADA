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

$factory->define(App\Video::class, function (Faker\Generator $faker) {
    return [
        'src'            => "https://www.youtube.com/embed/pfp0x0NQf-E",
        'title'          => $faker->email,
        'category'       => $faker->name,
    ];
});

// $factory->define(Suyabay\Channel::class, function (Faker\Generator $faker) {
//     return [
//         'channel_name'        => $faker->name,
//         'channel_description' => $faker->sentence,
//         'subscription_count'  => 10,
//     ];
// });

// $factory->define(Suyabay\Episode::class, function (Faker\Generator $faker) {
//     return [
//         'episode_name'          => $faker->name,
//         'episode_description'   => $faker->sentence,
//         'view_count'            => 10,
//         'image'                 => "http://goo.gl/pm9GOw",
//         'audio_mp3'             => "http://goo.gl/LkNP5M",
//         'channel_id'            => 1,
//     ];
// });

