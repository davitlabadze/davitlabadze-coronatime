<?php

namespace App\Http\Livewire;

use App\Models\Statistic;
use Livewire\Component;

class Worldwide extends Component
{
    public function render()
    {
        $confirmeds = Statistic::all()->pluck('confirmed');
        $recovereds = Statistic::all()->pluck('recovered');
        $deathss = Statistic::all()->pluck('deaths');

        $confirmed = 0;
        for ($i = 0; $i < count($confirmeds); $i++) {
            $confirmed += $confirmeds[$i];
        }

        $recovered = 0;
        for ($i = 0; $i < count($recovereds); $i++) {
            $recovered += $recovereds[$i];
        }

        $deaths = 0;
        for ($i = 0; $i < count($deathss); $i++) {
            $deaths += $deathss[$i];
        }
        return view('livewire.worldwide', [
            'confirmed' => $confirmed,
            'recovered' => $recovered,
            'deaths'    => $deaths,
        ]);
    }
}
