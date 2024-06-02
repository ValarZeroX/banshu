<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AgeServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Other extends Controller
{
    public function getAge(Request $request, $locale)
    {
        App::setLocale($locale);

        $currentDate = new \DateTime();
        $endDate = $currentDate->format('Y-m-d');

        $yesterdayDate = new \DateTime();
        $yesterdayDate->modify('-1 day');
        $startDate = $yesterdayDate->format('Y-m-d');
        return view('other/age', ['event' => false, 'data' => [], 'start_date' => $startDate, 'end_date' => $endDate]);
    }
    public function calculateAge(Request $request, $locale)
    {

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $AgeServices = new AgeServices();
        $ageDetails = $AgeServices->calculateAgeFromDates($startDate, $endDate);
        App::setLocale($locale);

        return view('other/age', ['event' => true, 'data' => $ageDetails, 'start_date' => $startDate, 'end_date' => $endDate]);
    }
}
