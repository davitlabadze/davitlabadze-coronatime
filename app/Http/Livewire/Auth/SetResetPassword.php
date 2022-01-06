<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Http\Request;
use Livewire\Component;

class SetResetPassword extends Component
{
    public function render(Request $request, $token)
    {
        $token = request()->get($request);
        return view('livewire.auth.set-reset-password', ['token' => $token]);
    }
}
