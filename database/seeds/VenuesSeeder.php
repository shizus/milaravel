<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Venue;
use Faker\Factory as Faker;


class VenuesSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Venue::create(
                [
                    'name' => $faker->word(),
                    'address' => $faker->word(),
                    'latitude' => $faker->latitude(),
                    'longitude' => $faker->longitude(),
                    'phone' => $faker->phoneNumber()
                ]
            );
        }

    }

}