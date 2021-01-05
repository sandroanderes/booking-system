<?php

namespace App\Orchid\Screens\Calendars;

use App\Models\CalendarGeneral;
use App\Models\CalendarOpeninghours;
use App\Models\CalendarSpecification;
use App\Models\CalendarGastrotable;
use App\Models\CalendarServiceEmployees;
use App\Models\CalendarRooms;
use App\Models\CalendarSports;
use App\Orchid\Layouts\Calendars\GeneralInformationsLayout;
use App\Orchid\Layouts\Calendars\SpecificationLayout;
use App\Orchid\Layouts\Calendars\OpeningHoursLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;
use Orchid\Support\Facades\Alert;

class EditCalendar extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Buecher Bearbeiten';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Bearbeite deinen Buecher';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(CalendarGeneral $calendar, CalendarOpeninghours $oh, CalendarSpecification $specification, CalendarGastrotable $gastrotable, CalendarSports $sports, CalendarRooms $rooms, CalendarServiceEmployees $service_employees): array
    {
        return [
            'calendar' => $calendar,
            'oh' => $oh,
            'specification' => $specification,
            'gastrotable' => $gastrotable,
            'sports' => $sports,
            'rooms' => $rooms,
            'service_employees' => $service_employees
        ];
    }
    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */


    /* Einbindung der Accordions */
    public function layout(): array
    {
        return [
            Layout::accordion([
                'Schritt 1: Allgemeine Einstellungen' => GeneralInformationsLayout::class,
                'Schritt 2: Öffnungszeiten' => OpeningHoursLayout::class,
                'Schritt 3: Reservations-Spezifikationen' => SpecificationLayout::class,
            ]),
            Layout::view('orchid.scripts'),
        ];
    }
    /* ======================== DB Uploads ========================  */
    public function createOrUpdate(CalendarGeneral $calendar, Request $request)
    {
        $data_general = $request->get('calendar');
        $calendar->user_id = $data_general["user_id"];
        $calendar->name = $data_general["name"];
        $calendar->country = $data_general["country"];
        $calendar->street = $data_general["street"];
        $calendar->location = $data_general["location"];
        $calendar->status = $data_general["status"];
        $calendar->description = $data_general["description"];
        $calendar->public = $data_general["public"];
        $calendar->privateLink = $data_general["privateLink"];
        $calendar->template = $data_general["template"];
        $calendar->unit = $data_general["unit"];
        $calendar->image = $data_general["image"];
        $validation = $calendar->save();
        if ($validation == 1) {
            return $calendar->id;
        }else {
            return 0;
        }

    }
}
