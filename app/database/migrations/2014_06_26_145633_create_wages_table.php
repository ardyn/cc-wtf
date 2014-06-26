<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('employee_id')->unsigned()->index('`fk_wages_1_idx`');
			$table->enum('wage_type', array('HOURLY','SALARY','COMMISSION'));
			$table->decimal('units', 6)->unsigned();
			$table->decimal('rate', 5)->unsigned()->default(1.00);
			$table->integer('wageable_id')->unsigned();
			$table->enum('wageable_type', array('invoices','removals','fixits'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wages');
	}

}
