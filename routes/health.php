<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (string $locale) {
    App::setLocale($locale);
    return view('health/health');
});

Route::get('/bmi', function (string $locale) {
    App::setLocale($locale);
    return view('health/bmi');
});