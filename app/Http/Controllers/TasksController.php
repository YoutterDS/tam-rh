<?php

namespace App\Http\Controllers;

class TasksController extends Controller
{
    public function index()
    {
        return view('dashboard.tasks.index');
    }

    public function show($id)
    {
        return view('dashboard.tasks.detail');
    }
}

