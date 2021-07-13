<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public $userCanAcces;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userCanAcces   = User::find(auth()->user()->id)->hasRole(['super-admin', 'admin']);

            return $next($request);
        });

    }

    public function index()
    {
        if( !$this->userCanAcces ) {
            return redirect()->route('dashboard.index');
        }

        return view('dashboard.subscription.index');
    }
}
