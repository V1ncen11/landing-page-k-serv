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
    // Bantai Mixed Content (Error merah "Mixed Content" di Console lo)
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    // Kasih tau Laravel kalau lo pake Vite terbaru (Tailwind v4)
    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    \Illuminate\Support\Facades\Vite::useManifestFilename('.vite/manifest.json');
}
}
