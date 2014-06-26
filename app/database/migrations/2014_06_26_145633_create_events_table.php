<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('calendar_id')->unsigned()->index('`fk_calendar_events_1_idx`');
			$table->dateTime('start');
			$table->dateTime('end');
			$table->char('color', 7)->default('#FFFFFF');
			$table->text('description');
			$table->timestamps();
			$table->integer('company_id')->unsigned()->index('`fk_calendar_events_2_idx`');
			$table->integer('eventable_id')->unsigned();
			$table->enum('eventable_type', array('customers','estimates','fixits'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
