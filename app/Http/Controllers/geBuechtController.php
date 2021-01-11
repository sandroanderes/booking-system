<?php

namespace App\Http\Controllers;
use App\Models\geBuechtGastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class geBuechtController extends Controller
{
    public function store(Request $request)
    {

        $form = new geBuechtGastro;

        $form->firstname = $request->firstname;
        $form->name = $request->name;
        $form->email = $request->email;
        $form->tel = $request->tel;
        $form->reservation_duration = $request->reservation_duration;
        $form->timeslot = $request->timeslot;
        $form->remarks = $request->remarks;
        $form->size = $request->size;
        $form->calendar_id = $request->calendar_id;

        $form->save();

        $data = DB::table('calendar_general')
        ->leftJoin('calendar_openinghours','calendar_openinghours.calendar_id','=','calendar_general.id')
        ->where('public','=',1)
        ->where('featured','=',1)
        ->get();

        return redirect('/');
    }
}
