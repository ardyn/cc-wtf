<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invoices', function(Blueprint $table)
		{
			$table->foreign('customer_id')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('property_address_id')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('account_id')->references('id')->on('inv_accounts')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('sold_by')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invoices', function(Blueprint $table)
		{
			$table->dropForeign('invoices_customer_id_foreign');
			$table->dropForeign('invoices_property_address_id_foreign');
			$table->dropForeign('invoices_account_id_foreign');
			$table->dropForeign('invoices_sold_by_foreign');
			$table->dropForeign('invoices_company_id_foreign');
		});
	}

}
