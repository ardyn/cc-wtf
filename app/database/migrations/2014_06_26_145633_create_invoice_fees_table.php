<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_fees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invoice_id')->unsigned()->index('`fk_invoice_fees_2_idx`');
			$table->integer('fee_id')->unsigned()->index('`fk_invoice_fees_1_idx`');
			$table->integer('quantity')->unsigned()->default(1);
			$table->decimal('price');
			$table->string('description', 128)->default('');
			$table->integer('company_id')->unsigned()->index('`fk_invoice_fees_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_fees');
	}

}
