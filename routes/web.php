<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/makeSitemap', [PagesController::class, 'makeSitemap']);
Route::get('/sitemap.xml', [PagesController::class, 'sitemap']);
// Route::get("sitemap.xml", function () {
//     return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
// });

Route::get('/', function () {
    App::setLocale('en');
    return view('index');
});

Route::get('/{locale}', function (string $locale) {
    App::setLocale($locale);
    return view('index');
});
