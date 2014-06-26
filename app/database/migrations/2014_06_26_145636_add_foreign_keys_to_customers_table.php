<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->foreign('campaign_id')->references('id')->on('campaigns')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('property_address')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('belongs_to')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('SET NULL');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('billing_address')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->dropForeign('customers_campaign_id_foreign');
			$table->dropForeign('customers_property_address_foreign');
			$table->dropForeign('customers_belongs_to_foreign');
			$table->dropForeign('customers_company_id_foreign');
			$table->dropForeign('customers_billing_address_foreign');
		});
	}

}
