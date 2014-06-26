<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimateLaborsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimate_labors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('labor_id')->unsigned()->index('`fk_invoice_labors_1_idx`');
			$table->integer('estimate_id')->unsigned()->index('`fk_estimate_labors_2_idx`');
			$table->decimal('price')->unsigned();
			$table->integer('quantity')->unsigned();
			$table->string('description', 128)->default('');
			$table->integer('company_id')->unsigned()->index('`fk_estimate_labors_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimate_labors');
	}

}
