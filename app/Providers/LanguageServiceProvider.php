<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $lang = "br";

        if (request()->has('lang')) {
            $lang = request()->input('lang');
            session(['lang' => $lang]);
        }

        if (session()->has('lang')) {
            $lang = session('lang');
        } else {
            $lang = "br";
            session(['lang' => $lang]);
        }

        $languageFile = resource_path("lang/{$lang}.php");
        include $languageFile;


        // Compartilhar as variáveis com todas as views e controllers
        $this->app->singleton('lang', function ($app) use ($lang) {
            return $lang;
        });

        $this->app->singleton('language', function ($app) use ($language) {
            return $language;
        });
    }

    public function boot()
    {

    }
}
