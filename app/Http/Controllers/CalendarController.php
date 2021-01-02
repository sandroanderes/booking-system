<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index()
    {
        $data = DB::table('calendar_general')
        ->leftJoin('calendar_openinghours','calendar_openinghours.calendar_id','=','calendar_general.id')
        ->where('public','=',0)
        ->get();

        return view('pages.calendar', compact('data'));
    }
}
