<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
class PagesController extends Controller
{
    public function makeSitemap()
    {
        // $langArray = ['en', 'zh-Hant'];

        $path = public_path('sitemap.xml');
            SitemapGenerator::create(config('app.url'))->hasCrawled(function (Url $url) {

            })->writeToFile($path);
    }

    public function sitemap()
    {
        $xmlContent = file_get_contents(public_path('sitemap.xml'));
        return view('sitemap', ['xmlContent' => $xmlContent]);
    }
}