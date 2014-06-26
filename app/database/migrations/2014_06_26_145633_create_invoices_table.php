<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned()->index('`fk_invoices_1_idx`');
			$table->integer('property_address_id')->unsigned()->index('`fk_invoices_2_idx`');
			$table->timestamps();
			$table->decimal('tax', 5, 4);
			$table->decimal('billed');
			$table->string('number', 16);
			$table->date('date');
			$table->boolean('type');
			$table->date('due_date');
			$table->integer('account_id')->unsigned()->index('`fk_invoices_3_idx`');
			$table->text('notes');
			$table->integer('sold_by')->unsigned()->index('`fk_invoices_4_idx`');
			$table->integer('company_id')->unsigned()->index('`fk_invoices_5_idx`');
			$table->unique(['number','company_id'], '`number_UNIQUE`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoices');
	}

}
