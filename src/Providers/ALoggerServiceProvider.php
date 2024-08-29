<?php

namespace Massabatic\ALogger\Providers;

use Illuminate\Support\ServiceProvider;

class ALoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Log::info('ALoggerServiceProvider booted successfully!');

        // Load package migrations
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        // Publish configuration file
        $this->publishes([
            __DIR__.'/../../config/alogger.php' => config_path('alogger.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/alogger.php',
            'alogger'
        );
    }
}
