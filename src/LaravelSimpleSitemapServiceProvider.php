<?php

namespace Lucacri\LaravelSimpleSitemap;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lucacri\LaravelSimpleSitemap\Commands\LaravelSimpleSitemapCommand;

class LaravelSimpleSitemapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelsimplesitemap')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelsimplesitemap_table')
            ->hasCommand(LaravelSimpleSitemapCommand::class);
    }
}
