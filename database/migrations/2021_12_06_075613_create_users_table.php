<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('brand_id')->nullable()->index('brand_id');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email');
			$table->string('password')->nullable();
			$table->boolean('admin')->default(0);
			$table->string('remember_token', 1000)->nullable();
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
		Schema::drop('users');
	}

}
