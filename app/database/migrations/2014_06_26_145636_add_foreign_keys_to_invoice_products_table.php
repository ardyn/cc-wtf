<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoiceProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invoice_products', function(Blueprint $table)
		{
			$table->foreign('product_id')->references('id')->on('products')->onUpdate('NO ACTION')->onDelete('RESTRICT');
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
		Schema::table('invoice_products', function(Blueprint $table)
		{
			$table->dropForeign('invoice_products_product_id_foreign');
			$table->dropForeign('invoice_products_invoice_id_foreign');
			$table->dropForeign('invoice_products_company_id_foreign');
		});
	}

}
