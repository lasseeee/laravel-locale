<?php

namespace Lasseeee\Locale\Concerns;

trait SetsLocale
{
    /**
     * Set the locale of this user to the specified locale.
     *
     * @param  string  $locale
     * @return void
     */
    public function setLocale(string $locale)
    {
        $this->update(['locale' => $locale]);
    }
}
