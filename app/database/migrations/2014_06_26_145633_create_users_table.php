<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 128)->nullable();
			$table->string('username', 128)->unique('`username_UNIQUE`');
			$table->string('password', 60);
			$table->boolean('status')->default(1);
			$table->string('picture', 128);
			$table->string('confirmation_key', 128);
			$table->dateTime('last_login')->default('0000-00-00 00:00:00');
			$table->integer('company_id')->unsigned()->index('`fk_users_1_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
