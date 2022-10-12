<?php

namespace Lucacri\LaravelSimpleSitemap\Commands;

use Illuminate\Console\Command;

class LaravelSimpleSitemapCommand extends Command
{
    public $signature = 'laravelsimplesitemap';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
