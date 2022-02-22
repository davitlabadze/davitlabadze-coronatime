<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class SigninAfterConfirmationEmail extends Component
{
    public function submit()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.signin-after-confirmation-email');
    }
}
