<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campaigns', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('brand_id')->index('brand_id');
			$table->string('campaign_hash', 1000)->nullable();
			$table->string('campaign_name', 1000);
			$table->string('campaign_channel', 1000)->default('sms');
			$table->boolean('prefix_brand_code')->nullable();
			$table->string('message', 3000);
			$table->string('call_to_action_url', 1000)->nullable();
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
		Schema::drop('campaigns');
	}

}
