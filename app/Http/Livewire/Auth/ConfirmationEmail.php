<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ConfirmationEmail extends Component
{
    public function mout()
    {
        $user = Auth::user();
        if ($user) {
            if (!$user->hasVerifiedEmail()) {
                Auth::logout();
                return redirect()->route('verify');
            }
        }
    }
    public function render()
    {
        return view('livewire.auth.confirmation-email');
    }
}
