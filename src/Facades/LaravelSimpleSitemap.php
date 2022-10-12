<?php

namespace Lucacri\LaravelSimpleSitemap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucacri\LaravelSimpleSitemap\LaravelSimpleSitemap
 */
class LaravelSimpleSitemap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lucacri\LaravelSimpleSitemap\LaravelSimpleSitemap::class;
    }
}
