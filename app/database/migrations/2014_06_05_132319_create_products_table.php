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
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('reference_no');
			$table->string('product_title');
			$table->text('description');
			$table->integer('turnaround')->unsigned();
			$table->integer('min_order')->unsigned();
			$table->date('valid_until');
			$table->foreign('product_category')->references('category')->on('product_categories');
			$table->foreign('company')->eferences('company_name')->on('companies');
			$table->string('image');
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
		Schema::drop('products');
	}

}
