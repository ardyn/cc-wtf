<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoiceLaborsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invoice_labors', function(Blueprint $table)
		{
			$table->foreign('labor_id')->references('id')->on('labors')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('invoice_id')->references('id')->on('invoices')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
		Schema::table('invoice_labors', function(Blueprint $table)
		{
			$table->dropForeign('invoice_labors_labor_id_foreign');
			$table->dropForeign('invoice_labors_invoice_id_foreign');
			$table->dropForeign('invoice_labors_company_id_foreign');
		});
	}

}
