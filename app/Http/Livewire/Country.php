<?php

namespace App\Http\Livewire;

use App\Models\CountryApi;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class Country extends Component
{
    public $search;
    public $filteredByDeaths;
    public $filteredByCountries;
    public $filteredByConfirmed;
    public $filteredByRecovered;

    public function countries()
    {
        $this->filteredByCountries = true;
    }
    public function recovered()
    {
        $this->filteredByRecovered = true;
    }

    public function confirmed()
    {
        $this->filteredByConfirmed = true;
    }
    public function deaths()
    {
        $this->filteredByDeaths = true;
    }

    public function render()
    {

        // $test = DB::table('users')
        // ->join('country_apis', 'users.id', '=', 'country_apis.id')
        // ->join('statistics', 'users.id', '=', 'statistics.country_api_id')
        // ->select('users.id', 'country_apis.name', 'statistics.confirmed', 'statistics.deaths', 'statistics.recovered');

        $user = auth()->user();
        $locale = app()->currentLocale();
        // $test = DB::table('country_apis')
        // ->leftJoin('statistics', 'country_apis.id', '=', 'statistics.country_api_id');
        return view('livewire.country', [
            'user' => $user,
            'countries' => CountryApi::with('statistics')->when(strlen($this->search) >= 2, function ($query) use ($locale) {
                return $query->where("name->${locale}", 'like', '%'.$this->search.'%');
            })
            ->when($this->filteredByCountries === true, function ($query) {
                return $query->orderByDesc('name');
            })->when($this->filteredByConfirmed === true, function ($query) {
                return $query->orderByDesc('statistics.confirmed');
            })
            ->when($this->filteredByRecovered === true, function ($query) {
                return $query->orderByDesc('statistics.recovered');
            })
            ->when($this->filteredByDeaths === true, function ($query) {
                return $query->orderByDesc('statistics.deaths');
            })
            ->get()
        ]);
    }
}
