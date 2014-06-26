<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned()->index('`fk_products_2_idx`');
			$table->string('name', 45);
			$table->string('description');
			$table->decimal('cost', 8, 3)->unsigned();
			$table->decimal('price', 8, 3)->unsigned();
			$table->decimal('lease', 8, 3)->unsigned();
			$table->boolean('is_active')->default(1);
			$table->integer('company_id')->unsigned()->index('`fk_products_3_idx`');
			$table->timestamps();
			$table->unique(['name','company_id'], '`index4`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
