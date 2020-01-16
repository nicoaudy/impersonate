<?php

namespace NicoAudy\Impersonate;

use NicoAudy\Middleware\Impersonate as ImpersonateMiddleware;
use Illuminate\Support\ServiceProvider;

class ImpersonateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Register the service the package provides.
        $this->app->singleton('impersonate', function ($app) {
            return new Impersonate;
        });

        $this->registerMiddleware();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['impersonate'];
    }

    /**
     * Register plugin middleware.
     *
     * @param void
     * @return  void
     */
    public function registerMiddleware()
    {
        $this->app['router']->aliasMiddleware('impersonate', ImpersonateMiddleware::class);
    }
}
