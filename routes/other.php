<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Other;

//其他主頁
Route::get('/', function (string $locale) {
    App::setLocale($locale);
    return view('other/other');
});

//其他計算年齡
Route::get('/age', [Other::class, 'getAge']);
// Route::get('/age', function (string $locale) {
//     App::setLocale($locale);
//     return view('other/age');
// });
Route::post('/age', [Other::class, 'calculateAge'])->name('calculateAge');

Route::get('/time', function (string $locale) {
    App::setLocale($locale);
    return view('other/time');
});

Route::get('/date', function (string $locale) {
    App::setLocale($locale);
    return view('other/date');
});