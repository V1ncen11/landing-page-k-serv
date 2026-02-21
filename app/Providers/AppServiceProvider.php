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
    // Paksa HTTPS biar CSS gak diblokir (Mixed Content)
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    // Arahin ke jantung manifest Vite terbaru lo
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    \Illuminate\Support\Facades\Vite::useManifestFilename('.vite/manifest.json');
}
}
