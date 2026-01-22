<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for the Job Board application.
 *
 * This provider is used to register and bootstrap any
 * application services required for the Laravel application.
 *
 * The application leverages PostgreSQL as the database system
 * and uses database queue connections for job processing.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
