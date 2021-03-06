<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class Countries extends Component
{
    public $search;
    public $sortBy = 'name';
    public $sortDirectionAsc = true;

    protected $queryString = [
        'sortBy'
    ];

    public function sortBy($column)
    {
        $this->sortDirectionAsc = $this->sortBy === $column ? !$this->sortDirectionAsc : 'asc';
        $this->sortBy = $column;
    }

    public function render()
    {
        $locale = app()->currentLocale();
        $sortColumn = $this->sortBy === 'name' ? 'name->' . app()->getLocale() : $this->sortBy;

        return view('livewire.countries', [
            'countries' => Country::join('statistics', 'countries.id', '=', 'statistics.country_id')
            ->orderBy($sortColumn, $this->sortDirectionAsc ? 'asc' : 'desc')
            ->when(strlen($this->search) >= 3, function ($query) use ($locale) {
                return $query->where("name->${locale}", 'like', '%'.$this->search.'%');
            })
            ->get()
        ]);
    }
}
