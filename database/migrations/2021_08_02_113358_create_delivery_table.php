<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('brand_id')->nullable()->index('brand_id');
			$table->integer('campaign_id')->nullable()->index('campaign_id');
			$table->string('campaign_channel', 500)->nullable();
			$table->string('phone_number')->nullable();
			$table->string('message', 3000)->nullable();
			$table->string('message_id')->nullable()->index('message_id');
			$table->string('price')->nullable();
			$table->string('meta_data', 1000)->nullable();
			$table->dateTime('delivery_time')->nullable();
			$table->string('type')->nullable();
			$table->boolean('sent')->nullable();
			$table->boolean('bad_number')->nullable();
			$table->boolean('opted_out')->nullable();
			$table->string('status')->nullable();
			$table->string('status_message', 1000)->nullable();
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
		Schema::drop('delivery');
	}

}
