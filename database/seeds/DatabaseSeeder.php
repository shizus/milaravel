<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Venue;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Venue::truncate();
		Model::unguard();

		// $this->call('UserTableSeeder');
        $this->call('VenuesSeeder');
        $this->call('FieldsSeeder');
	}

}