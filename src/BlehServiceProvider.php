<?php

namespace Enchance\Bleh;

use Illuminate\Support\ServiceProvider;

class BlehServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Route
        include __DIR__.'/routes.php';

        // Language
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'bleh');

        $this->publishes([
            __DIR__.'/Config/bleh.php' => config_path('bleh.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/bleh.php', 'bleh');

        // Views
        $this->loadViewsFrom(__DIR__ . '/Views', 'bleh');

        $this->app['bleh'] = $this->app->share(function($app) {
            return new Bleh;
        });
    }
}
