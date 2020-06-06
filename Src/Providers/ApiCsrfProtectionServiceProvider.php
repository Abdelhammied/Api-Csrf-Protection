<?php

namespace ApiCsrfProtection\Providers;

use ApiCsrfProtection\Commands\CreateEncryptionKeys;
use ApiCsrfProtection\Commands\GenerateCipherText;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->commands([
            CreateEncryptionKeys::class,
            GenerateCipherText::class,
        ]);
    }
}
