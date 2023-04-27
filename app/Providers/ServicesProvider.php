<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Url\UrlService;
use App\Services\Url\UrlServiceContract;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UrlServiceContract::class, UrlService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
