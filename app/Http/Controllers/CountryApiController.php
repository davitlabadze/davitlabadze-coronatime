<?php

namespace App\Http\Controllers;

use App\Models\CountryApi;
use App\Models\Statistic;
use Illuminate\Http\Request;

class CountryApiController extends Controller
{
    public function show()
    {
        $countries = CountryApi::all();
        return redirect()->route('countries', ['countries' => $countries]);
    }
}
