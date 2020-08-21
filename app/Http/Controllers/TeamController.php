<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function new(Request $request)
    {
        return view('dashboard.team.new');
    }

    public function listado(Request $request): View
    {
        return view('dashboard.team.listado');
    }

    public function departamentos(Request $request): View
    {
        return view('dashboard.team.departamentos');
    }

    public function organigrama(): View
    {
        return view('dashboard.team.organigrama');
    }

}

