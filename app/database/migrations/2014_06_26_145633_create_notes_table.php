<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('created_by')->unsigned()->index('`fk_notes_1_idx`');
			$table->integer('customer_id')->unsigned()->index('`fk_notes_2_idx`');
			$table->timestamps();
			$table->string('description');
			$table->boolean('priority')->default(0);
			$table->integer('company_id')->unsigned()->index('`fk_notes_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notes');
	}

}
