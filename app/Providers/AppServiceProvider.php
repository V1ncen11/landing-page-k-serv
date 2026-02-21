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
    // Paksa HTTPS biar CSS nggak diblokir (Mixed Content)
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    // Kasih tahu folder build-nya
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    
    // WAJIB: Kasih tahu Laravel kalau manifest-nya sekarang ada di 
    // public/build/manifest.json (BUKAN di .vite/)
    \Illuminate\Support\Facades\Vite::useManifestFilename('manifest.json');
}
}
