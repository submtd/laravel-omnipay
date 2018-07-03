<?php

namespace Submtd\LaravelOmnipay\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The LaravelOmnipayServiceProvider class is the main
 * entry point for the package.
 */
class LaravelOmnipayServiceProvider extends ServiceProvider
{
    /**
     * The service provider boot method
     *
     * @return void
     */
    public function boot()
    {
        // migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([__DIR__ . '/../../database/migrations' => database_path('migrations')], 'migrations');
        // config
        $this->mergeConfigFrom(__DIR__ . '/../../config/omnipay.php', 'omnipay');
        $this->publishes([__DIR__ . '/../../config' => config_path()], 'config');
    }
}
