<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryClicksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_clicks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('list_phone_number_id')->index('list_phone_number_id');
			$table->integer('campaign_id')->index('campaign_id');
			$table->integer('brand_id')->index('brand_id');
			$table->integer('click_count')->default(1);
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
		Schema::drop('delivery_clicks');
	}

}
