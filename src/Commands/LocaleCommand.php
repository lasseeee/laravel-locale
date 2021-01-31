<?php

namespace Lasseeee\Locale\Commands;

use Illuminate\Console\Command;

class LocaleCommand extends Command
{
    public $signature = 'laravel-locale';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
