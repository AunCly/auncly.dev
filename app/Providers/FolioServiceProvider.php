<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::domain(config('app.gaelle_domain'))->path(resource_path('views/gaelle/pages'))->middleware([
            '*' => [],
        ]);
        Folio::domain(config('app.domain'))->path(resource_path('views/auncly/pages'))->middleware([
            '*' => [],
        ]);
    }
}
