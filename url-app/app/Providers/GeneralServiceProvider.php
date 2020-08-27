<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GeneralServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('App\Domain\Service\Infrastructure\HashServiceInterface',
            'App\Domain\Service\HashService');


        $this->app->bind('App\Domain\Service\Infrastructure\UrlServiceInterface',
            'App\Domain\Service\UrlService');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
