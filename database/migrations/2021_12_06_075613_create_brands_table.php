<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('whatsapp_optin_message', 1000)->nullable();
			$table->string('whatsapp_optout_message', 1000)->nullable();
			$table->string('sub_account_token')->nullable();
			$table->string('sub_account_id')->nullable();
			$table->string('whatsapp_phone_number')->nullable();
			$table->string('brand_name')->nullable();
			$table->string('brand_code_name')->nullable();
			$table->string('brand_logo_file', 1000)->nullable();
			$table->string('short_code')->nullable();
			$table->string('daily_sending_limit', 1000)->nullable();
			$table->string('monthly_sending_limit', 1000)->nullable();
			$table->string('campaign_redirect_url', 1000)->nullable();
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
		Schema::drop('brands');
	}

}
