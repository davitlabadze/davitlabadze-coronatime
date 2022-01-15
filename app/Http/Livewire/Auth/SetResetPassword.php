<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;

class SetResetPassword extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->token = request()->token;
        $this->email = request()->email;
    }

    protected $rules = [
        'email'                 => 'required|email',
        'password'              => 'required|min:3',
        'password_confirmation' => 'required|min:3|same:password',
        'token'                 => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $status = Password::reset(
            $this->validate(),
            function ($user, $password) {
                $user->update(['password' => $password]);

                $user->save();

                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
        ? redirect()->route('password.update', app()->getLocale())->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
    }


    public function render()
    {
        return view('livewire.auth.set-reset-password');
    }
}
