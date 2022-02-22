<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ConfirmationEmail extends Component
{
    public function render()
    {
        return view('livewire.auth.confirmation-email');
    }
}
