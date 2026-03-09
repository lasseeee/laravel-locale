<?php

namespace Lasseeee\Locale\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController
{
    public function __invoke(Request $request, string $locale)
    {
        if (!in_array($locale, ['en', 'nb'], true)) {
            abort(404);
        }

        if (auth()->check()) {
            auth()->user()->setLocale($locale);
        }

        session(['locale' => $locale]);

        flash()->success(__('Updated', [], $locale));

        return redirect()->back();
    }
}
