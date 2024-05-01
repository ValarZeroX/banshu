<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Conversion extends Controller
{
    public function getLength(Request $request, $locale)
    {

        $aFile = app_path('JsonData/length.json');
        $sJsonData = file_get_contents($aFile);
        $aData = json_decode($sJsonData, true);
        App::setLocale($locale);

        return view('conversion/length', ['event' => true, 'data' => $aData]);
    }

    public function getWeight(Request $request, $locale)
    {

        $aFile = app_path('JsonData/weight.json');
        $sJsonData = file_get_contents($aFile);
        $aData = json_decode($sJsonData, true);
        App::setLocale($locale);

        return view('conversion/weight', ['event' => true, 'data' => $aData]);
    }
}