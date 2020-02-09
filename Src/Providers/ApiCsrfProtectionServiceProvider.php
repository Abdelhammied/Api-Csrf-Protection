<?php

namespace ApiCsrfProtection\Providers;

use Illuminate\Support\ServiceProvider;

class ApiCsrfProtectionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "database/migrations");
    }
}
