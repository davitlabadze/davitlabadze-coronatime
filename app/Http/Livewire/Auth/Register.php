<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email'                 => 'required|email|unique:users,email',
        'name'                  => 'required|min:3|unique:users,name',
        'password'              => 'required|min:3',
        'password_confirmation' => 'required|min:3|same:password',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $this->validate();

        $user = User::create([
            'email'    => $this->email,
            'name'     => $this->name,
            'password' => $this->password,
        ]);

        event(new Registered($user));


        Auth::login($user);

        return redirect()->route('verify', app()->getLocale());
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
