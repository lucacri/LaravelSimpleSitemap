<?xml version="1.0" encoding="UTF-8" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($urls as $url)
        <url>
            <loc>{{ $url['loc'] }}</loc>
            <changefreq>{{$url['changefreq'] ?? 'weekly'}}</changefreq>
            <priority>{{ $url['priority'] ?? '0.9' }}</priority>
        </url>
    @endforeach
</urlset>
