<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('calendar_general')
        ->leftJoin('calendar_openinghours','calendar_openinghours.calendar_id','=','calendar_general.id')
        ->where('public','=',1)
        ->where('featured','=',1)
        ->get();

        return view('pages.home', compact('data'));
    }
}
