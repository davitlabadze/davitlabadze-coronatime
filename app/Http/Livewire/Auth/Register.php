<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email'    => 'required|email|unique:users,email',
        'name'     => 'required|min:3|unique:users,name',
        'password' => 'required|confirmed|min:3',
        'password_confirmation' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $this->validate();

        User::create([
            'email'    => $this->email,
            'name'     => $this->name,
            'password' => $this->password,
        ]);

        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
