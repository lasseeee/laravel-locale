<?php

namespace Lasseeee\Locale\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;
use Lasseeee\Locale\Http\Controllers\LocaleController;

class Locale extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'locale';
    }

    /**
     * Register the typical info routes for an application.
     */
    public static function routes(array $options = [])
    {
        Route::get('locale/{locale}', LocaleController::class);
    }
}
