<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_info', function(Blueprint $table)
		{
			$table->integer('message_info_id', true);
			$table->integer('brand_id')->index('brand_id');
			$table->integer('campaign_id')->index('campaign_id');
			$table->integer('list_number_id')->index('list_number_id');
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
		Schema::drop('message_info');
	}

}
