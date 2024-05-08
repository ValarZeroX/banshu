<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
class PagesController extends Controller
{
    public function makeSitemap()
    {
        $path = public_path('sitemap.xml');
        SitemapGenerator::create(config('app.url'))->writeToFile($path);
    }

    public function sitemap()
    {
        return response()->file('sitemap.xml');
    }
}