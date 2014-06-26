<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaborsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 32);
			$table->decimal('price', 7)->unsigned();
			$table->integer('company_id')->unsigned()->index('`fk_labors_1_idx`');
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
		Schema::drop('labors');
	}

}
