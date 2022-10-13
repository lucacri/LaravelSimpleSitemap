<?php

it('creates the file', function () {
    config()->set('laravelsimplesitemap.save', [
        'disk' => 'public',
        'path' => 'sitemap.xml'
    ]);
    config()->set('laravelsimplesitemap.urls', [
        [
            'loc'        => 'https://example.com',
            'changefreq' => 'weekly',
            'priority'   => 0.9
        ],
        [
            'loc'        => 'https://example.com/second_link',
            'changefreq' => 'yearly',
            'priority'   => 0.4
        ]
    ]);
    \Illuminate\Support\Facades\Storage::fake('public');
    \Illuminate\Support\Facades\Storage::shouldReceive('disk')
                                       ->with('public')
                                       ->andReturnSelf()
                                       ->once();
    \Illuminate\Support\Facades\Storage::shouldReceive('put')->once()->with('sitemap.xml',
                                                                            '<?xml version="1.0" encoding="UTF-8" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            <url>
            <loc>https://example.com</loc>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
            <url>
            <loc>https://example.com/second_link</loc>
            <changefreq>yearly</changefreq>
            <priority>0.4</priority>
        </url>
    </urlset>
');

    \Lucacri\LaravelSimpleSitemap\Facades\LaravelSimpleSitemap::generate();
});
