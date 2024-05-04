<?php
namespace App\Http\Controllers;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
