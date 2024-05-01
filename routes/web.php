<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (string $locale) {
    App::setLocale($locale);
    return view('welcome');
});
