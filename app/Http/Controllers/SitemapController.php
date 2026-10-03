<?php

namespace App\Http\Controllers;

use App\Support\SeoPageRegistry;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(SeoPageRegistry $registry): Response
    {
        $urls = [];

        $urls[] = [
            'loc' => rtrim($registry->site()['url'], '/').'/',
            'lastmod' => now()->toDateString(),
            'changefreq' => 'weekly',
            'priority' => '1.0',
        ];

        foreach ($registry->pages() as $path => $page) {
            $urls[] = [
                'loc' => $registry->url($path),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>'.e($url['loc']).'</loc>';
            $xml .= '<lastmod>'.$url['lastmod'].'</lastmod>';
            $xml .= '<changefreq>'.$url['changefreq'].'</changefreq>';
            $xml .= '<priority>'.$url['priority'].'</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
