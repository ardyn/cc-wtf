<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('`fk_addresses_2_idx`');
			$table->integer('zone_id')->unsigned()->nullable()->index('`fk_addresses_1_idx`');
			$table->string('address', 64);
			$table->string('city', 64);
			$table->char('state', 2);
			$table->char('zip', 5);
			$table->decimal('latitude', 9, 6)->nullable();
			$table->decimal('longitude', 9, 6)->nullable();
			$table->timestamps();
			$table->string('address2', 32)->nullable();
			$table->unique(['address','address2','zip'], '`index4`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
