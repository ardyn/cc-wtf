<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('campaign_id')->unsigned()->index('`fk_leads_1_idx`');
			$table->integer('company_id')->unsigned()->index('`fk_leads_2_idx`');
			$table->timestamps();
			$table->string('first_name', 45);
			$table->string('last_name', 45)->default('');
			$table->char('cell', 11)->default('');
			$table->char('work', 11)->default('');
			$table->char('home', 11)->default('');
			$table->string('address', 64);
			$table->string('city', 64);
			$table->char('state', 2);
			$table->char('zip', 5);
			$table->string('description');
			$table->string('email', 128)->nullable();
			$table->string('extra1', 45)->nullable();
			$table->string('extra2', 45)->nullable();
			$table->string('extra3', 45)->nullable();
			$table->boolean('status')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leads');
	}

}
