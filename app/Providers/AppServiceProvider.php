<?php

namespace App\Providers;

use App\Services\SeoService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(SeoService::class, function () {
            return new SeoService;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production') || $this->app->environment('staging')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        \Illuminate\Pagination\Paginator::useBootstrapFive();
    }
}
