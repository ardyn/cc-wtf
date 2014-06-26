<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->date('hire_date');
			$table->date('rehire_date')->nullable();
			$table->date('termination_date')->nullable();
			$table->enum('designation', array('OWNER','MANAGER','SALESPERSON','SECRETARY','LEAD','INSTALLER'));
			$table->char('tin', 11);
			$table->boolean('federal_deductions')->default(1);
			$table->boolean('state_deductions')->default(1);
			$table->text('description')->nullable();
			$table->decimal('labor_rate', 5, 3)->unsigned()->default(0.000);
			$table->enum('wage_type', array('HOURLY','SALARY','COMMISSION'));
			$table->integer('company_id')->unsigned()->index('`fk_employees_2_idx`');
			$table->integer('user_id')->unsigned()->index('`fk_employees_1_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
