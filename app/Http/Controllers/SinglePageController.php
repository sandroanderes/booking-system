<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index($buecherKey)
    {
        $template = DB::table('calendar_general')
            ->where('calendar_general.buecherKey', '=', $buecherKey)
            ->first()
            ->template;

        switch ($template) {
            case 'gastronomy':
                $data = DB::table('calendar_general')
                    ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->first();

                $template = DB::table('calendar_general')
                    ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->get();

                return view('pages.single-page', compact('data', 'template'));
                break;
            case 'sports':
                $data = DB::table('calendar_general')
                    ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('sports', 'sports.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->first();

                $template = DB::table('calendar_general')
                    ->leftJoin('sports', 'sports.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->get();

                return view('pages.single-page', compact('data', 'template'));
                break;
            case 'room':
                $data = DB::table('calendar_general')
                    ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('rooms', 'rooms.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->first();

                $template = DB::table('calendar_general')
                    ->leftJoin('rooms', 'rooms.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->get();

                return view('pages.single-page', compact('data', 'template'));
                break;
            case 'services':
                $data = DB::table('calendar_general')
                    ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('service_employees', 'service_employees.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->first();

                $template = DB::table('calendar_general')
                    ->leftJoin('service_employees', 'service_employees.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->get();

                return view('pages.single-page', compact('data', 'template'));
                break;
            case 'default':
                $data = DB::table('calendar_general')
                    ->leftJoin('calendar_openinghours', 'calendar_openinghours.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('calendar_specifications', 'calendar_specifications.calendar_id', '=', 'calendar_general.id')
                    ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->first();

                $template = DB::table('calendar_general')
                    ->leftJoin('gastrotable', 'gastrotable.calendar_id', '=', 'calendar_general.id')
                    ->where('calendar_general.buecherKey', '=', $buecherKey)
                    ->get();

                return view('pages.single-page', compact('data', 'template'));
                break;
        }
    }
}
