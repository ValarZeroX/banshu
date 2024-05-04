<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Conversion;

// Route::get('/mm_to_cm', [MeasurementController::class, 'getMMto']);
// $supportedLocales = ['en', 'zh'];
// foreach ($supportedLocales as $locale) {

// }

Route::get('/', function (string $locale) {
    App::setLocale($locale);
    return view('conversion/conversion');
});

// Route::get('/length', function (string $locale) {
//     App::setLocale($locale);
//     return view('conversion/length');
// });

Route::get('/length', [Conversion::class, 'getLength']);
Route::get('/weight', [Conversion::class, 'getWeight']);
Route::get('/temperature ', [Conversion::class, 'getTemperature']);
// Route::redirect('/', '/en');