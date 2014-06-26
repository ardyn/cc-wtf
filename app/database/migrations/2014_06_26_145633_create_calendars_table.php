<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('`fk_calendars_1_idx`');
			$table->string('name', 32);
			$table->char('color', 7)->default('#FFFFFF');
			$table->string('description', 45)->default('');
			$table->timestamps();
			$table->unique(['name','company_id'], '`name_UNIQUE`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendars');
	}

}
