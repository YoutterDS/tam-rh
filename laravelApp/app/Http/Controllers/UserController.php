<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Models\Preregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view();
    }

    public function list()
    {
        $users = User::where('id', '<>', 0)->get();
        return view('welcome', compact('users'));
    }

    public function getFormEmail($token)
    {
        if( $token ) {

        }
    }
}
