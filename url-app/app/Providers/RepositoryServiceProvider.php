<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Domain\Repository\Contracts\UrlRepositoryInterface',
            'App\Domain\Repository\UrlRepository'
        );


        $this->app->bind(
            'App\Domain\Repository\Contracts\RepositoryInterface',
            'App\Domain\Repository\UrlvisitRepository'
        );
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
