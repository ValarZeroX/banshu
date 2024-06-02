<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Conversion extends Controller
{
    public function getLength(Request $request, $locale)
    {

        $file = app_path('JsonData/length.json');
        $jsonData = file_get_contents($file);
        $data = json_decode($jsonData, true);
        App::setLocale($locale);

        return view('conversion/length', ['event' => true, 'data' => $data]);
    }

    public function getWeight(Request $request, $locale)
    {

        $file = app_path('JsonData/weight.json');
        $jsonData = file_get_contents($file);
        $data = json_decode($jsonData, true);
        App::setLocale($locale);

        return view('conversion/weight', ['event' => true, 'data' => $data]);
    }

    public function getTemperature(Request $request, $locale)
    {

        $file = app_path('JsonData/temperature.json');
        $jsonData = file_get_contents($file);
        $data = json_decode($jsonData, true);
        App::setLocale($locale);

        return view('conversion/temperature', ['event' => true, 'data' => $data]);
    }

    public function getArea(Request $request, $locale)
    {

        $file = app_path('JsonData/area.json');
        $jsonData = file_get_contents($file);
        $data = json_decode($jsonData, true);
        App::setLocale($locale);

        return view('conversion/area', ['event' => true, 'data' => $data]);
    }

}