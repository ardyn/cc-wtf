<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFixitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fixits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('created_by')->unsigned()->index('`fk_fixits_1_idx`');
			$table->integer('customer_id')->unsigned()->index('`fk_fixits_2_idx`');
			$table->timestamps();
			$table->boolean('is_billable')->default(0);
			$table->string('solution')->default('');
			$table->string('description')->default('');
			$table->date('date_fixed')->nullable();
			$table->date('date_occurred');
			$table->integer('company_id')->unsigned()->index('`fk_fixits_3_idx`');
			$table->string('number', 16)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fixits');
	}

}
