<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Password;

class ResetPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:users,email'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $status = Password::sendResetLink(
            $this->validate()
        );

        return $status === Password::RESET_LINK_SENT
        ? redirect()->route('verify', app()->getLocale())->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
