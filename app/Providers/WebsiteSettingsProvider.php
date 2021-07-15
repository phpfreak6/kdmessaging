<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteSettingsProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        config()->set('website_settings', \App\Setting::first()->toArray());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
