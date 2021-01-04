<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GastronomyController extends Controller
{
    public function index($id)
    {
        $data = DB::table('calendar_general')
            ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
            ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
            ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
            ->where('calendar_general.id', '=', $id)
            ->where('public', '=', 0)
            ->first();

        $gastrotable = DB::table('calendar_general')
            ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
            ->where('calendar_general.id', '=', $id)
            ->get();

        return view('pages.single-page', compact('data','gastrotable'));
    }
}
