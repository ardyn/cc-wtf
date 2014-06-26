<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_inventory', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('debit')->unsigned()->index('`fk_inventory_entries_2_idx`');
			$table->integer('credit')->unsigned()->index('`fk_inventory_entries_3_idx`');
			$table->integer('confirmed_by')->unsigned()->index('`fk_inventory_entries_4_idx`');
			$table->integer('company_id')->unsigned()->index('`fk_inventory_entries_5_idx`');
			$table->timestamps();
			$table->date('date');
			$table->integer('entered_by')->unsigned()->index('`fk_inventory_1_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_inventory');
	}

}
