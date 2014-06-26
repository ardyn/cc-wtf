<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('`fk_customers_3_idx`');
			$table->integer('property_address')->unsigned()->index('`fk_customers_2_idx`');
			$table->integer('belongs_to')->unsigned()->nullable()->index('`fk_customers_4_idx`');
			$table->integer('campaign_id')->unsigned()->index('`fk_customers_1_idx`');
			$table->timestamps();
			$table->enum('type', array('RESIDENTIAL','COMMERCIAL'))->default('RESIDENTIAL');
			$table->boolean('removal_preference')->default(0);
			$table->boolean('is_storing')->default(0);
			$table->string('name', 45)->default('');
			$table->boolean('priority')->default(0);
			$table->boolean('status')->default(0);
			$table->boolean('is_lease')->default(0);
			$table->string('email', 128)->default('');
			$table->integer('billing_address')->unsigned()->index('`fk_customers_5_idx`');
			$table->unique(['company_id','name'], '`index8`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
