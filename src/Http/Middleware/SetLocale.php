<?php

namespace Lasseeee\Locale\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->user()?->locale ?? session('locale') ?? app()->getLocale();

        $allowedLocales = ['en', 'nb'];

        if (!in_array($locale, $allowedLocales, true)) {
            abort(404);
        }

        app()->setLocale($locale);

        Carbon::setLocale($locale === 'nb' ? 'no' : 'en');

        return $next($request);
    }
}
