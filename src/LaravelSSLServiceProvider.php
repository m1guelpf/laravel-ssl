<?php

namespace M1guelpf\LaravelSSL;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class LaravelSSLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if (config('app.env', 'prod') == 'prod' || config('app.env', 'production') == 'production')
        {
            URL::forceScheme('https');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
