<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $name;
    public $password;

    protected $rules = [
        // 'email'    => 'required|email',
        'name'     => 'required|min:3',
        'password' => 'required|min:3',
    ];

    // public function mount()
    // {
    //     $this->livewireLocale = app()->getLocale();
    // }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $this->validate();
        // dd($this->name, $this->password);
        $user = Auth::attempt([
            'name'     => $this->name,
            'password' => $this->password,
        ]);

        event(new Auth($user));
        // dd($user);
        return redirect(route('dashboard', app()->getLocale()));
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
