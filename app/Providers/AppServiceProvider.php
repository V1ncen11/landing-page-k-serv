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
    if (env('VERCEL_ENV') || config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
    // PENTING: Paksa Laravel nyari di root build, bukan di .vite
    \Illuminate\Support\Facades\Vite::useManifestFilename('manifest.json');
}
}
