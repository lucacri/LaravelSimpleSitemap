<?php

namespace Lucacri\LaravelSimpleSitemap;

use Illuminate\Support\Facades\Storage;

class LaravelSimpleSitemap {

    public function generate(): string {
        $sitemap = view()->make('laravelsimplesitemap::sitemap', ['urls' => config("laravelsimplesitemap.urls")])->render();

        Storage::disk(config('laravelsimplesitemap.save.disk'))->put(config('laravelsimplesitemap.save.path'), $sitemap);

        return $sitemap;
    }
}
