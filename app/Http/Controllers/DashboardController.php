<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(Request $request)
    {
//        \var_dump($request);die;
    }

    public function index(Request $request): View
    {

        return view('dashboard.index');
    }

    public function settings(): View
    {
        return view('dashboard.settings.index');
    }

    public function timetable(): View
    {
        return view('dashboard.timetable.index');
    }
    public function timetableDetail(): View
    {
        return view('dashboard.timetable.detail');
    }

    public function team(): View
    {
        return view('dashboard.team.index');
    }

    public function teamNew(): View
    {
        return view('dashboard.team.new-employer');
    }


    public function documents(): View
    {
        return view('dashboard.documents.index');
    }
}

