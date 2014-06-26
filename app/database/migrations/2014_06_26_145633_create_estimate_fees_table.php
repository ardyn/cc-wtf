<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimateFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimate_fees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estimate_id')->unsigned()->index('`fk_estimate_fees_2_idx`');
			$table->integer('fee_id')->unsigned()->index('`fk_estimate_fees_1_idx`');
			$table->integer('quantity')->unsigned();
			$table->decimal('price', 7);
			$table->string('description', 128)->default('');
			$table->integer('company_id')->unsigned()->index('`fk_estimate_fees_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimate_fees');
	}

}
