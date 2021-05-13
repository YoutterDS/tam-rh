<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules            = [
        'email'        => 'required|email',
        'password'     => 'required',
    ];

    public function subitForm()
    {
        $this->validate();

        $remember = ($this->remember)? 'true' : 'false';

        if ( Auth::attempt(['email' => $this->email, 'password' => $this->password], $remember) ) {
            request()->session()->regenerate();
            return redirect()->route('dashboard.index', ['locale'=>app()->getLocale()]);
        }

        $this->addError('email', 'wrong');
        $this->addError('password', 'wrong');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
