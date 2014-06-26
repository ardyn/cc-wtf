<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_user', function(Blueprint $table)
		{
			$table->integer('company_id')->unsigned();
			$table->integer('user_id')->unsigned()->index('`fk_company_user_2_idx`');
			$table->index(['company_id','user_id'], '`index1`');
			$table->index(['company_id','user_id'], '`index3`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_user');
	}

}
