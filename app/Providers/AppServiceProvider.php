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
    // Force HTTPS dan URL yang benar di environment production/Vercel
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        URL::forceScheme('https');

        // Force root URL dari APP_URL agar tidak salah dideteksi oleh vercel-php
        // Ini mencegah prefiks /build/ ganda pada URL aset
        if ($appUrl = env('APP_URL')) {
            URL::forceRootUrl(rtrim($appUrl, '/'));
        }
    }

    // Kasih tahu folder build-nya
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');

    // WAJIB: Kasih tahu Laravel manifest-nya ada di public/build/manifest.json
    \Illuminate\Support\Facades\Vite::useManifestFilename('manifest.json');
}
}
