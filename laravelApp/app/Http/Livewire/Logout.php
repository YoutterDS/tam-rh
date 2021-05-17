<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public $text;
    public $extraClass;

    public function logout()
    {
        $this->lastLogin();
        Auth::logout();
        return redirect(route('login'));
    }

    public function lastLogin()
    {
        $userLogged = User::find( Auth::user()->id );
        $userLogged->timestamps = false;
        $userLogged->last_login_at = Carbon::now()->toDateTimeString();
        $userLogged->last_login_ip = request()->getClientIp();
        $userLogged->save();
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
