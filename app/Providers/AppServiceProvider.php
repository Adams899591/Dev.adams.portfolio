<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        // Force HTTPS in production environment
        // if (config('app.env') === 'production') {
        //     URL::forceScheme('https');
        // }

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
