<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function(Blueprint $table)
		{
			$table->increments('id');
            //'id', 'name', 'type', 'hours', 'venue_id'
            $table->string("name");
            $table->integer("type");
            $table->integer("sport");
            $table->integer("venue_id")->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues');
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
		Schema::drop('fields');
	}

}
