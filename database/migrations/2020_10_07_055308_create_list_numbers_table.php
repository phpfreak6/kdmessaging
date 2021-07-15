<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('list_numbers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('list_id')->nullable()->index('list_id');
			$table->integer('brand_id')->nullable()->index('brand_id');
			$table->string('list_number_hash', 1000)->nullable();
			$table->string('first_name', 1000)->nullable();
			$table->string('last_name', 1000)->nullable();
			$table->string('phone_number', 1000)->nullable();
			$table->boolean('bad_number')->nullable()->default(0);
			$table->boolean('opted_out')->nullable()->default(0);
			$table->boolean('whatsapp_opt')->nullable()->default(2);
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
		Schema::drop('list_numbers');
	}

}
