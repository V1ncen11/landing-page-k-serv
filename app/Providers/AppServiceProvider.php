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
    // Pastiin ini ada biar CSS gak diblokir browser karena masalah keamanan
    if (config('app.env') === 'production') {
        URL::forceScheme('https');
    }

    // Kasih tahu Laravel lokasi manifest dan folder build-nya
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    \Illuminate\Support\Facades\Vite::useManifestFilename('.vite/manifest.json');
}

}
