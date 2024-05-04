<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LocaleController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/makeSitemap', [PagesController::class, 'makeSitemap']);
Route::get('/sitemap', [PagesController::class, 'sitemap']);

Route::get('/', function () {
    App::setLocale('en');
    return view('index');
});

Route::get('/{locale}', function (string $locale) {
    App::setLocale($locale);
    return view('index');
});




Route::get('set-locale/{locale}', [LocaleController::class, 'setLocale'])->name('set-locale');