<?php

namespace App\Http\Controllers;
use App\Models\geBuechtGastro;
use Illuminate\Http\Request;

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
    }
}
