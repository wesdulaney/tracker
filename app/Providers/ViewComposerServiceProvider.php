<?php

namespace App\Providers;

use App\Http\ViewComposers\FooterComposer;
use App\Http\ViewComposers\NavigationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap these services.
     *
     * @return void
     */
    public function boot()
    {
        // Shared across all views
        View::share('site_title', config('site.title'));

        // Composers for primary components
        View::composer('layouts.master', NavigationComposer::class);
        View::composer('layouts.master', FooterComposer::class);
    }

    /**
     * Register these services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
