<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invoice_id')->unsigned()->index('`fk_invoice_products_2_idx`');
			$table->integer('product_id')->unsigned()->index('`fk_invoice_products_1_idx`');
			$table->decimal('price')->unsigned();
			$table->integer('quantity')->unsigned();
			$table->string('description', 128)->default('');
			$table->integer('company_id')->unsigned()->index('`fk_invoice_products_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_products');
	}

}
