# A Laravel package to create simple sitemaps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lucacri/laravelsimplesitemap.svg?style=flat-square)](https://packagist.org/packages/lucacri/laravelsimplesitemap)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lucacri/laravelsimplesitemap/run-tests?label=tests)](https://github.com/lucacri/laravelsimplesitemap/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lucacri/laravelsimplesitemap/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lucacri/laravelsimplesitemap/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lucacri/laravelsimplesitemap.svg?style=flat-square)](https://packagist.org/packages/lucacri/laravelsimplesitemap)

A very simple package to create sitemaps from specific URLs

## Installation

You can install the package via composer:

```bash
composer require lucacri/laravelsimplesitemap
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravelsimplesitemap-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravelsimplesitemap-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * Storage disk and path where to save the sitemap
     *
     */
    'save' => [
        'disk' => 'public',
        'path' => 'sitemap.xml'
    ],
    /*
     * The URL where your sitemap will be accessible.
     * This value will be used to inform Google of the changed sitemap
     *
     */
    'sitemap_url' => 'http://example.com/sitemap.xml',

    /*
    * An array of URLs to include in the sitemap
    * Example:
    *  [
            'loc'        => 'https://example.com',
            'changefreq' => 'weekly',
            'priority'   => 0.9
        ]
    */
    'urls' => [

        // example

        [
            'loc'        => 'https://example.com',
            'changefreq' => 'weekly',
            'priority'   => 0.9
        ]

    ]
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravelsimplesitemap-views"
```

## Usage

```shell
php artisan simplesitemap:create --ping-google
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [Luca Critelli](https://github.com/lucacri)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
