<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('dashboard.events.index');
    }

    public function show($id)
    {
        return view('dashboard.events.detail');
    }
}
