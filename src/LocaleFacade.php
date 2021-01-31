<?php

namespace Lasseeee\Locale;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lasseeee\Locale\Locale
 */
class LocaleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-locale';
    }
}
