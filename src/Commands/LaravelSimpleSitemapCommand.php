<?php

namespace Lucacri\LaravelSimpleSitemap\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Lucacri\LaravelSimpleSitemap\Facades\LaravelSimpleSitemap;

class LaravelSimpleSitemapCommand extends Command
{
    public $signature = 'simplesitemap:create {--ping-google : notifies Google of the updated sitemap}';

    public $description = 'Generates and saves the sitemap';

    public function handle(): int
    {
        LaravelSimpleSitemap::generate();
        $this->comment('Sitemap generated');

        if($this->option('ping-google')){
            Http::get('https://www.google.com/ping?sitemap=' . urlencode(config('laravelsimplesitemap.sitemap_url')));
            $this->comment('Notified google');
        }


        return self::SUCCESS;
    }
}
