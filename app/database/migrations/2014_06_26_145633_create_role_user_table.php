<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_user', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->index('`fk_role_user_1_idx`');
			$table->integer('role_id')->unsigned()->index('`fk_role_user_2_idx`');
			$table->index(['role_id','user_id'], '`index3`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_user');
	}

}
