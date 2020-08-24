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

    public function detalle(Request $request): View
    {
        return view('dashboard.team.detalle');
    }

    public function departamentos(Request $request): View
    {
        return view('dashboard.team.departamentos');
    }

    public function departamentosNew(Request $request): View
    {
        return view('dashboard.team.new-dpt');
    }

    public function departamentosDetalle(Request $request): View
    {
        return view('dashboard.team.detalle-dpt');
    }

    public function organigrama(): View
    {
        return view('dashboard.team.organigrama');
    }

}

