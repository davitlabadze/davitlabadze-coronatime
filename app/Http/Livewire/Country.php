<?php

namespace App\Http\Livewire;

use App\Models\CountryApi;
use Livewire\Component;

class Country extends Component
{
    public $search;
    public $filter = 'countries';
    public $filteredByCountries = null;
    public $filteredByDeaths = null;
    public $filteredByConfirmed = null;
    public $filteredByRecovered = null;

    protected $queryString = [
        'filter'
    ];

    public function setFilter($newFilter, )
    {
        $this->filter = $newFilter;
        if ($this->filter == 'countries') {
            if ($this->filteredByCountries === true) {
                $this->filteredByCountries = false;
            } else {
                $this->filteredByCountries = true;
            }
            $this->filteredByConfirmed = null;
            $this->filteredByRecovered = null;
            $this->filteredByDeaths    = null;
        }
        if ($this->filter == 'confirmed') {
            if ($this->filteredByConfirmed === true) {
                $this->filteredByConfirmed = false;
            } else {
                $this->filteredByConfirmed = true;
            }
            $this->filteredByCountries = null;
            $this->filteredByRecovered = null;
            $this->filteredByDeaths    = null;
        }
        if ($this->filter == 'deaths') {
            if ($this->filteredByDeaths === true) {
                $this->filteredByDeaths = false;
            } else {
                $this->filteredByDeaths = true;
            }
            $this->filteredByCountries = null;
            $this->filteredByConfirmed = null;
            $this->filteredByRecovered = null;
        }
        if ($this->filter == 'recovered') {
            if ($this->filteredByRecovered === true) {
                $this->filteredByRecovered = false;
            } else {
                $this->filteredByRecovered = true;
            }
            $this->filteredByCountries = null;
            $this->filteredByConfirmed = null;
            $this->filteredByDeaths    = null;
        }
    }
    public function render()
    {
        $user   = auth()->user();
        $locale = app()->currentLocale();
        return view('livewire.country', [
            'user' => $user,
            'filteredByCountries' => $this->filteredByCountries,
            'filteredByConfirmed' => $this->filteredByConfirmed,
            'filteredByDeaths' => $this->filteredByDeaths,
            'filteredByRecovered' => $this->filteredByRecovered,
            'countries' => CountryApi::leftJoin('statistics', 'country_apis.id', '=', 'statistics.country_api_id')
            ->when($this->filteredByCountries === true, function ($query) {
                return $query->orderByDesc('name');
            })
            ->when($this->filteredByCountries === true, function ($query) {
                return $query->orderBy('name', 'asc');
            })
            ->when($this->filteredByConfirmed === true, function ($query) {
                return $query->orderByDesc('confirmed');
            })
            ->when($this->filteredByDeaths === true, function ($query) {
                return $query->orderByDesc('deaths');
            })
            ->when($this->filteredByRecovered === true, function ($query) {
                return $query->orderByDesc('recovered');
            })
            ->when(strlen($this->search) >= 2, function ($query) use ($locale) {
                return $query->where("name->${locale}", 'like', '%'.$this->search.'%');
            })
            ->get(),
        ]);
    }
}
