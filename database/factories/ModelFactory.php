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

$factory->define(ACADA\Video::class, function (Faker\Generator $faker) {
    return [
        'src'            => "https://www.youtube.com/embed/pfp0x0NQf-E",
        'title'          => $faker->email,
        'category'       => $faker->name,
    ];
});

$factory->define(ACADA\User::class, function (Faker\Generator $faker) {
    return [
        'username'      => $faker->name,
        'email'         => $faker->email,
        'password'      => $faker->password,
        'avatar'        => $faker->imageUrl,
        'avatar'        => $faker->imageUrl,
        'oauth'       	=> 1,
        'occupation'    => $faker->name
    ];
});
