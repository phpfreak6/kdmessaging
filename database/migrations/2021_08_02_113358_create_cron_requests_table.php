<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cron_requests', function(Blueprint $table)
		{
			$table->integer('cron_request_id', true);
			$table->integer('user_id')->index('user_id');
			$table->integer('brand_id')->nullable()->index('brand_id');
			$table->integer('campaign_id')->nullable()->index('campaign_id');
			$table->integer('list_id')->nullable()->index('list_id');
			$table->string('message_type')->nullable();
			$table->string('type')->nullable();
			$table->boolean('status')->nullable()->default(0);
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
		Schema::drop('cron_requests');
	}

}
