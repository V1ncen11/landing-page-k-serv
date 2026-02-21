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
    // Paksa HTTPS di Vercel biar CSS nggak diblokir
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    // Kasih tahu folder build-nya
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    
    // WAJIB: Kasih tahu Laravel manifest-nya ada di public/build/manifest.json
    \Illuminate\Support\Facades\Vite::useManifestFilename('manifest.json');
}
}
