<?php

namespace Lasseeee\Locale;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lasseeee\Locale\Commands\LocaleCommand;

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
            ->name('laravel-locale')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_locale_table')
            ->hasCommand(LocaleCommand::class);
    }
}
