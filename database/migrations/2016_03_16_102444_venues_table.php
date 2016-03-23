<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
			$table->increments('id');
            //['name', 'address', 'fields', 'latitude', 'longitude', 'phone'];
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->float('latitude');
            $table->float('longitude');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venues');
	}

}
