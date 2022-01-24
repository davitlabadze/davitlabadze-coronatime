<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $name;
    public $password;
    public $user;


    protected $rules = [
        // 'email'    => 'required|email',
        'name'     => 'required|min:3',
        'password' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $fieldType = filter_var($this->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $auth = Auth::attempt([
            $fieldType   => $this->name,
            'password' => $this->password,
        ]);

        event(new Auth($auth));

        return redirect(route('dashboard', app()->getLocale()));
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
