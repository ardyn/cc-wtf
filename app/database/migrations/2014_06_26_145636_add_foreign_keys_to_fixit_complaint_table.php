<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFixitComplaintTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fixit_complaint', function(Blueprint $table)
		{
			$table->foreign('fixit_id')->references('id')->on('fixits')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('complaint_id')->references('id')->on('complaints')->onUpdate('NO ACTION')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fixit_complaint', function(Blueprint $table)
		{
			$table->dropForeign('fixit_complaint_fixit_id_foreign');
			$table->dropForeign('fixit_complaint_complaint_id_foreign');
		});
	}

}
