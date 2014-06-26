<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('phone', 11);
			$table->integer('address_id')->unsigned()->index('`fk_clients_1_idx`');
			$table->integer('contact_id')->unsigned()->index('`fk_clients_3_idx`');
			$table->string('name', 128);
			$table->string('email', 128);
			$table->string('timezone', 45);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
