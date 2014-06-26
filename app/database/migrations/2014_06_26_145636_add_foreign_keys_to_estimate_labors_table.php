<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstimateLaborsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estimate_labors', function(Blueprint $table)
		{
			$table->foreign('labor_id')->references('id')->on('labors')->onUpdate('NO ACTION')->onDelete('RESTRICT');
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
		Schema::table('estimate_labors', function(Blueprint $table)
		{
			$table->dropForeign('estimate_labors_labor_id_foreign');
			$table->dropForeign('estimate_labors_estimate_id_foreign');
			$table->dropForeign('estimate_labors_company_id_foreign');
		});
	}

}
