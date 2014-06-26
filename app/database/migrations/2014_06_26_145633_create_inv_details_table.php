<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_details', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('quantity')->unsigned();
			$table->integer('product_id')->unsigned()->index('`fk_inventory_details_1_idx`');
			$table->integer('inventory_id')->unsigned()->index('`fk_inventory_details_2_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_details');
	}

}
