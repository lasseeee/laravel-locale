<?php

namespace Lasseeee\Locale;

use Illuminate\Routing\Router;
use Lasseeee\Locale\Facades\Locale;
use Lasseeee\Locale\Http\Middleware\SetLocale;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LocaleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-locale');
    }

    public function registeringPackage()
    {
        $this->app->bind('locale', function ($app) {
            return new Locale();
        });
    }

    public function bootingPackage()
    {
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', SetLocale::class);
    }
}
