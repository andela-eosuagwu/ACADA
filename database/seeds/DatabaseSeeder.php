<?php

use App\Video;
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

            Video::create([
                'src'        => "https://www.youtube.com/embed/pfp0x0NQf-E",
                'title'      => $faker->email,
                'category'   => "php"
            ]);

        }

        Model::reguard();
    }
}