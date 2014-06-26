<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_inventory', function(Blueprint $table)
		{
			$table->foreign('debit')->references('id')->on('inv_accounts')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('credit')->references('id')->on('inv_accounts')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('confirmed_by')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('entered_by')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_inventory', function(Blueprint $table)
		{
			$table->dropForeign('inv_inventory_debit_foreign');
			$table->dropForeign('inv_inventory_credit_foreign');
			$table->dropForeign('inv_inventory_confirmed_by_foreign');
			$table->dropForeign('inv_inventory_company_id_foreign');
			$table->dropForeign('inv_inventory_entered_by_foreign');
		});
	}

}
