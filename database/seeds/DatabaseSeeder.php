<?php

use ACADA\User;
use ACADA\Video;
use Faker\Factory as Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Factory::create();

        foreach (range(1,10) as $index)
        {
            User::create([
                'username'      => $faker->name,
                'email'         => $faker->email,
                'password'      => $faker->password,
                'avatar'        => $faker->imageUrl,
                'avatar'        => $faker->imageUrl,
                'oauth'         => 1,
                'occupation'    => $faker->name
            ]);

            Video::create([
                'user_id'    => 1,
                'src'        => "https://www.youtube.com/embed/pfp0x0NQf-E",
                'title'      => $faker->email,
                'categories'   => "java",
                'description'   => "description"
            ]);

        }

        Model::reguard();
    }
}