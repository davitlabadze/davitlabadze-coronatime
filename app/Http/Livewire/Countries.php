<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class Countries extends Component
{
    public $search;
    public $sortBy = '';
    public $sortDirection = 'asc';

    protected $queryString = [
        'sortBy'
    ];

    public function sortBy($column)
    {
        $this->sortDirection = $this->sortBy === $column ? !$this->sortDirection : 'asc';
        $this->sortBy = $column;
    }

    public function render()
    {
        // $user   = auth()->user();
        $locale = app()->currentLocale();
        return view('livewire.countries', [
            // 'user' => $user,
            'countries' => Country::join('statistics', 'countries.id', '=', 'statistics.country_id')
            ->orderBy($this->sortBy, $this->sortDirection ? 'asc' : 'desc')
            ->when($this->sortDirection === false, function ($query) {
                return $query->orderByDesc('name');
            })
            ->when($this->sortDirection === true, function ($query) {
                return $query->orderBy('name', 'asc');
            })
            ->when(strlen($this->search) >= 2, function ($query) use ($locale) {
                return $query->where("name->${locale}", 'like', '%'.$this->search.'%');
            })
            ->get()
        ]);
    }
}
