<?php

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
