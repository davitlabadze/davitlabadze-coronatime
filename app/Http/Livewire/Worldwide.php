<?php

namespace App\Http\Livewire;

use App\Models\Statistic;
use Livewire\Component;

class Worldwide extends Component
{
    public function render()
    {
        $confirmed = Statistic::sum('confirmed');
        $recovered = Statistic::sum('recovered');
        $deaths    = Statistic::sum('deaths');
        return view('livewire.worldwide', [
            'confirmed' => $confirmed,
            'recovered' => $recovered,
            'deaths'    => $deaths,
        ]);
    }
}
