<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/makeSitemap', [PagesController::class, 'makeSitemap']);
Route::get('/sitemap.xml', [PagesController::class, 'sitemap']);


Route::get('/', function () {
    App::setLocale('en');
    return view('index');
});

Route::get('/{locale}/disclaimer', function (string $locale) {
    App::setLocale($locale);
    return view('common/disclaimer');
});

Route::get('/{locale}', function (string $locale) {
    if ($locale != 'sitemap.xml') {
        App::setLocale($locale);
        return view('index');
    }
});


