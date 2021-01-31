<?php

namespace Lasseeee\Locale\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController
{
    /**
     * Change the app locale.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $locale
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $locale)
    {
        if (auth()->check()) {
            auth()->user()->setLocale($locale);
        }

        session(['locale' => $locale]);

        flash()->success(__('Updated'));

        return redirect()->back();
    }
}
