<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Url\UrlRepository; 
use App\Repositories\Url\UrlRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UrlRepositoryContract::class, UrlRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
