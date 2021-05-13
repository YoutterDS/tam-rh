<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
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
}
