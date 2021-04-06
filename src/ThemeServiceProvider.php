<?php

namespace Caveofx;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Nova::booted(function () {
            Nova::theme(asset('/caveofx/admin-theme/theme.css'));
        });

        $this->publishes([
            __DIR__ . '/../resources/css' => public_path('caveofx/admin-theme'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}
