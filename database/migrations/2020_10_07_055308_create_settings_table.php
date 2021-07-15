<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('whatsapp_phone_number')->nullable();
			$table->string('whatsapp_account_id', 1000)->nullable();
			$table->string('whatsapp_authentication_token', 1000)->nullable();
			$table->string('application_id', 1500)->nullable();
			$table->string('company_name', 1000)->nullable();
			$table->string('timezone', 1000)->nullable()->index('timezone');
			$table->string('language', 1000)->nullable();
			$table->string('aws_access_key', 1000)->nullable();
			$table->string('aws_secret_access_key', 1000)->nullable();
			$table->string('aws_ses_region', 1000)->nullable();
			$table->string('aws_daily_quota', 1000)->nullable();
			$table->string('sends_left', 1000)->nullable();
			$table->string('sends_today', 1000)->nullable();
			$table->string('send_rate', 1000)->nullable();
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
		Schema::drop('settings');
	}

}
