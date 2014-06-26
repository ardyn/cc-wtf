<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFixitComplaintTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fixit_complaint', function(Blueprint $table)
		{
			$table->integer('fixit_id')->unsigned()->index('`fk_fixit_issue_1_idx`');
			$table->integer('complaint_id')->unsigned()->index('`fk_fixit_issue_2_idx`');
			$table->primary(['fixit_id','complaint_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fixit_complaint');
	}

}
