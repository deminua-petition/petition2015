<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //public
        $this->publishes([
            __DIR__ . '/../../vendor/twbs/bootstrap-sass/assets' => public_path('/'),
        ], 'bootstrap');



        $this->publishes([
            __DIR__ . '/../../vendor/components/jquery/jquery.min.js' => public_path('javascripts/jquery.min.js'),
        ], 'jquery');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
