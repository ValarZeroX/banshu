<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
class PagesController extends Controller
{
    public function sitemap()
    {
        $path = public_path('sitemap.xml');
        SitemapGenerator::create(config('app.url'))->writeToFile($path);
    }
}