<?php



use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Maker;

use App\Venue;
use App\Field;

use Faker\Factory as Faker;


class FieldsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        for ($i = 0; $i < 5; $i++) {
            Field::create(
                [
                    'name' => $faker->name(),
                    'type' => $faker->numberBetween(0,5),
                    //'sport' => $faker->numberBetween(0,5),
                    'venue_id' => $faker->numberBetween(1,5)
                ]
            );
        }
    }

}
