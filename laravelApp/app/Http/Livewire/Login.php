<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Login extends Component
{
    use WithRateLimiting;

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

            $user = auth()->user();
            if( $user->active === 'N' && $user->email_verified_at ) {
                Auth::logout();
                Session::flash('userInactive', Lang::get('validation.without-permissions'));
                return redirect()->route('login');
            }

            request()->session()->regenerate();
            return redirect()->route('dashboard.index', ['locale'=>app()->getLocale()]);
        } else {
            try {
                $this->rateLimit(5);
            } catch (TooManyRequestsException $exception) {
                Session::flash('throttle', Lang::get('validation.throttle', ['secondsUntilAvailable'=>$exception->secondsUntilAvailable]));
                return redirect()->route('login');
            }
        }

        $this->addError('email', 'wrong');
        $this->addError('password', 'wrong');
    }


    public function render()
    {
        return view('livewire.user.login');
    }
}
