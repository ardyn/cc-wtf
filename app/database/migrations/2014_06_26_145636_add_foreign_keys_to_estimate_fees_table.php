<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstimateFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estimate_fees', function(Blueprint $table)
		{
			$table->foreign('fee_id')->references('id')->on('fees')->onUpdate('NO ACTION')->onDelete('RESTRICT');
			$table->foreign('estimate_id')->references('id')->on('estimates')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estimate_fees', function(Blueprint $table)
		{
			$table->dropForeign('estimate_fees_fee_id_foreign');
			$table->dropForeign('estimate_fees_estimate_id_foreign');
			$table->dropForeign('estimate_fees_company_id_foreign');
		});
	}

}
