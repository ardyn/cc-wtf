<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wages', function(Blueprint $table)
		{
			$table->foreign('employee_id')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wages', function(Blueprint $table)
		{
			$table->dropForeign('wages_employee_id_foreign');
		});
	}

}
