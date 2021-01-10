<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BuecherController extends Controller
{
    public function index()
    {
        $data = DB::table('calendar_openinghours')
        ->rightJoin('calendar_general','calendar_openinghours.calendar_id','=','calendar_general.id')
        ->where('public','=',1)
        ->where('status','=',1)
        ->orderBy('calendar_general.id', 'desc')
        ->get();

        //select * from `calendar_general` left join `calendar_openinghours` on `calendar_openinghours`.`calendar_id` = `calendar_general`.`id` where `public` = 0 and `status` = 1

        return view('pages.buecher', compact('data'));
    }
}
