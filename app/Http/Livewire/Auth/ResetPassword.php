<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPassword extends Component
{
    // public $email;

    // protected $rules = [
    //     'email' => 'required|email'
    // ];

    // public function submit(Request $request)
    // {
    //     $this->validate();
    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );

    //     return $status === Password::RESET_LINK_SENT
    //                 ? back()->with(['status' => __($status)])
    //                 : back()->withErrors(['email' => __($status)]);
    //     // ->redirect()->route('password.email');
    // }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
