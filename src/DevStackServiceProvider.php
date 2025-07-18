<?php

namespace Rrr\DevStack;

use Illuminate\Support\ServiceProvider;

class DevStackServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rrr');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'rrr');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/../routes/dev-stack.php');

        if (!class_exists('DevStack')) {
            class_alias(\Rrr\DevStack\Facades\DevStack::class, 'DevStack');
        }
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
//        $this->mergeConfigFrom(__DIR__.'/../config/dev-stack.php', 'dev-stack');

        // Register the service the package provides.
        $this->app->singleton('dev-stack', function ($app) {
            return new DevStack;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dev-stack'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
//        $this->publishes([
//            __DIR__.'/../config/dev-stack.php' => config_path('dev-stack.php'),
//        ], 'dev-stack.config');

        // Publishing the views.
//        $this->publishes([
//            __DIR__.'/../resources/views' => base_path('resources/views/vendor/rrr'),
//        ], 'dev-stack.views');

        // Publishing the migrations.
//        $this->publishes([
//            __DIR__.'/../database/migrations' => database_path('migrations'),
//        ], 'dev-stack.migrations');

        // Publishing assets.
//        $this->publishes([
//            __DIR__.'/../resources/assets' => public_path('vendor/rrr'),
//        ], 'dev-stack.assets');

        // Publishing the translation files.
//        $this->publishes([
//            __DIR__.'/../resources/lang' => resource_path('lang/vendor/rrr'),
//        ], 'dev-stack.lang');

        // Registering package commands.
//        $this->commands([]);
    }
}
