<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstimatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estimates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned()->index('`fk_estimates_1_idx`');
			$table->timestamps();
			$table->string('name', 32)->nullable();
			$table->decimal('tax_rate', 5, 4)->unsigned();
			$table->decimal('discount', 6)->unsigned()->default(0.00);
			$table->boolean('priority')->default(0);
			$table->text('description')->nullable();
			$table->boolean('is_lease');
			$table->integer('company_id')->unsigned()->index('`fk_estimates_2_idx`');
			$table->string('estimate_number', 16);
			$table->integer('property_address')->unsigned()->index('`fk_estimates_3_idx`');
			$table->unique(['estimate_number','company_id'], '`estimate_number_UNIQUE`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estimates');
	}

}
