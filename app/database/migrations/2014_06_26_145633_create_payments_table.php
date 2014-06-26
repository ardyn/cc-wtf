<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->dateTime('date');
			$table->decimal('amount')->unsigned();
			$table->enum('payment_method', array('CHECK','CARD','CASH','TRADE','GIFT'));
			$table->integer('invoice_id')->unsigned()->index('`fk_payments_1_idx`');
			$table->string('charge_id')->nullable();
			$table->string('description')->nullable();
			$table->integer('company_id')->unsigned()->index('`fk_payments_2_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payments');
	}

}
