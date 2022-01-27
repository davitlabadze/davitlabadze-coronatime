<?php

namespace App\Http\Livewire;

use App\Models\CountryApi;
use Livewire\Component;

class Country extends Component
{
    public function render()
    {
        $countries = CountryApi::all();
        return view('livewire.country', ['countries' => $countries]);
    }
}
