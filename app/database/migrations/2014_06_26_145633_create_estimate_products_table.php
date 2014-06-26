<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimate_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index('`fk_invoice_products_1_idx`');
			$table->integer('estimate_id')->unsigned()->index('`fk_estimate_products_2_idx`');
			$table->decimal('price')->unsigned();
			$table->integer('quantity')->unsigned();
			$table->string('description', 128)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimate_products');
	}

}
