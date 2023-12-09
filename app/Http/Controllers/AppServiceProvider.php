<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Providers\langProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       // $this->app->register(langProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
