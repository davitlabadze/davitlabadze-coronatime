<?php

namespace App\Http\Livewire;

use App\Models\CountryApi;
use Livewire\Component;

class Country extends Component
{
    public function render()
    {
        $user = auth()->user();
        $countries = CountryApi::all();

        return view('livewire.country', [
            'user' => $user,
            'countries' => $countries
        ]);
    }
}
