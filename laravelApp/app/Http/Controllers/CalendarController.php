<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $weekdays = $this::getWeekdays();
        return view('dashboard.calendar.index', [
            'weekdays' => $weekdays,
        ]);
    }

    public static function getWeekdays()
    {
        $monday = Carbon::now()->startOfWeek();
        $sunday = Carbon::now()->endOfWeek();
        for($date = $monday; $date->lte($sunday); $date->addDay()) {
            $weekdays[] = ['id'=> $date->locale(app()->getLocale())->dayOfWeek, 'name'=>ucfirst($date->locale(app()->getLocale())->isoFormat("ddd"))];
        }
        return $weekdays;
    }
}
