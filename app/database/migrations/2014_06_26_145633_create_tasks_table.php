<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('created_by')->unsigned()->index('`fk_tasks_1_idx`');
			$table->timestamps();
			$table->date('due_date');
			$table->string('description');
			$table->boolean('priority');
			$table->dateTime('completion_date')->nullable();
			$table->integer('company_id')->unsigned()->index('`fk_tasks_2_idx`');
			$table->integer('assigned_to')->unsigned()->index('`fk_tasks_3_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
