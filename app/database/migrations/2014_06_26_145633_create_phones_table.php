<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('number', 11)->unique('`number_UNIQUE`');
			$table->enum('type', array('HOME','WORK','CELL'));
			$table->integer('contact_id')->unsigned()->index('`fk_phones_1_idx`');
			$table->string('extension', 5)->default('');
			$table->integer('company_id')->unsigned()->index('`fk_phones_2_idx`');
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
		Schema::drop('phones');
	}

}
