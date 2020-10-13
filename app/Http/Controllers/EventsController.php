<?php

namespace App\Http\Controllers;

class EventsController extends Controller
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

