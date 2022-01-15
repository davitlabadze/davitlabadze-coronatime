<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change($lang)
    {
        if ($lang === 'ka') {
            session()->put('lang', 'ka');
        } elseif ($lang === 'en') {
            session()->put('lang', 'en');
        }

        return back();
    }
}
