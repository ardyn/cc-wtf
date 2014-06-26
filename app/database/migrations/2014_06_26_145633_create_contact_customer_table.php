<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_customer', function(Blueprint $table)
		{
			$table->integer('customer_id')->unsigned()->index('`fk_customer_person_2_idx`');
			$table->integer('contact_id')->unsigned()->index('`fk_customer_person_1_idx`');
			$table->string('description', 64);
			$table->boolean('is_primary')->default(1);
			$table->index(['contact_id','customer_id'], '`index3`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contact_customer');
	}

}
