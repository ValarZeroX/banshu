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

Route::get('/body-fat', function (string $locale) {
    App::setLocale($locale);
    return view('health/body-fat');
});

Route::get('/bmr', function (string $locale) {
    App::setLocale($locale);
    return view('health/bmr');
});

Route::get('/tdee', function (string $locale) {
    App::setLocale($locale);
    return view('health/tdee');
});