<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\TourPackage;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['url' => route('cars.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => route('tour-packages.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => route('drop-off.index'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('gallery.index'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => route('contact.index'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        foreach (TourPackage::all() as $pkg) {
            $urls[] = [
                'url' => route('tour-packages.show', $pkg->slug),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
        foreach ($urls as $u) {
            $xml .= '  <url>'."\n";
            $xml .= '    <loc>'.e($u['url']).'</loc>'."\n";
            $xml .= '    <changefreq>'.$u['changefreq'].'</changefreq>'."\n";
            $xml .= '    <priority>'.$u['priority'].'</priority>'."\n";
            $xml .= '  </url>'."\n";
        }
        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
            'Charset' => 'UTF-8',
        ]);
    }
}
