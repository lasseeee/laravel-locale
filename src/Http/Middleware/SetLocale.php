<?php

namespace Lasseeee\Locale\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = auth()->check() && $request->user()->locale
        ? $request->user()->locale
        : session('locale', app()->getLocale());

        app()->setLocale($locale);

        Carbon::setLocale($locale == 'nb' ? 'no' : 'en');

        // setlocale(LC_TIME, $locale == 'nb' ? 'nb_NO.utf8' : 'en_GB.utf8');

        return $next($request);
    }
}
