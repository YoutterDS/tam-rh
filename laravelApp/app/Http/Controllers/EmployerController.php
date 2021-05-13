<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;

class EmployerController extends Controller
{
    public function index(Request $request)
    {
        $weekdays = CalendarController::getWeekdays();
        return view('dashboard.employees.index', ['weekdays'=>$weekdays]);
    }

    /*
    public function new(Request $request)
    {
        return view('dashboard.employees.sections.new');
    }

    public function listado(Request $request): View
    {
        return view('dashboard.employees.listado');
    }

    public function detalle(Request $request): View
    {
        return view('dashboard.employees.sections.detalle');
    }

    public function departamentos(Request $request): View
    {
        // return view('dashboard.employees.sections.departamentos');
        return view('dashboard.employees.index');
    }

    public function departamentosNew(Request $request): View
    {
        return view('dashboard.employees.new-dpt');
    }

    public function departamentosDetalle(Request $request): View
    {
        return view('dashboard.employees.detalle-dpt');
    }

    public function organigrama(): View
    {
        return view('dashboard.employees.organigrama');
    }
    */
}
