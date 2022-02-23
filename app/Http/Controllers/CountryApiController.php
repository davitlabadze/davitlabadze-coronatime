<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function show()
    {
        $countries = Country::all();
        return redirect()->route('countries', ['countries' => $countries]);
    }
}
