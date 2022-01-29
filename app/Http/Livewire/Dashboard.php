<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.dashboard', ['user' => $user]);
    }
}
