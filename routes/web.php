<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    App::setLocale('en');
    return view('index');
});

Route::get('/{locale}', function (string $locale) {
    App::setLocale($locale);
    return view('index');
});
