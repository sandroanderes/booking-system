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
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\isEmpty;

class NewCalendar extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Neuer Kalender hinzufügen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Alle Angaben können später wieder geändert werden';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(CalendarGeneral $calendar): array
    {
        return [];
    }
    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create post')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->novalidate(),

            Button::make('Create OH post')
                ->icon('pencil')
                ->method('createOrUpdate_Oh')
                ->novalidate(),

            Button::make('Create specification post')
                ->icon('pencil')
                ->method('createOrUpdate_specification')
                ->novalidate(),

            Button::make('Create gastrotable post')
                ->icon('pencil')
                ->method('createOrUpdate_gastrotable')
                ->novalidate(),

            Button::make('Create serviceemployees')
                ->icon('heart')
                ->method('createOrUpdate_service_employees')
                ->novalidate(),
            Button::make('Create Rooms')
                ->icon('heart')
                ->method('createOrUpdate_rooms')
                ->novalidate(),
            Button::make('Create Sports')
                ->icon('heart')
                ->method('createOrUpdate_sports')
                ->novalidate(),
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

    /* DB Uploads */
    public function createOrUpdate(CalendarGeneral $calendar, Request $request)
    {
        $data = $request->get('calendar');

        if (empty($data["name"])) {
            Toast::error(__('Gib deinem Kalender einen Namen'));
        } elseif (empty($data["street"])) {
            Toast::error(__('Gib ein Land an'));
        } elseif (empty($data["location"])) {
            Toast::error(__('Gib einen Ort an'));
        } elseif (empty($data["description"])) {
            Toast::error(__('Beschreibe, was man in deinem Kalender buchen kann'));
        } elseif ($data["template"] == "none" && empty($data["unit"])) {
            Toast::error(__('Gib ein Reservationsobjekt an'));
        } else {
            $calendar->user_id = $data["user_id"];
            $calendar->name = $data["name"];
            $calendar->country = $data["country"];
            $calendar->street = $data["street"];
            $calendar->location = $data["location"];
            $calendar->status = $data["status"];
            $calendar->description = $data["description"];
            $calendar->public = $data["public"];
            $calendar->privateLink = $data["privateLink"];
            $calendar->template = $data["template"];
            $calendar->unit = $data["unit"];
            $calendar->image = $data["image"];
            $calendar->save();
            Toast::info(__('Allgemeine Einstellungen wurden in die DB geschrieben'));
        }
    }

    public function createOrUpdate_Oh(CalendarOpeninghours $oh, Request $request)
    {
        $data = $request->get('oh');
        $oh->calendar_id = $data["calendar_id"];
        $oh->day_monday = $data["day_monday"];
        $oh->day_tuesday = $data["day_tuesday"];
        $oh->day_wednesday = $data["day_wednesday"];
        $oh->day_thursday = $data["day_thursday"];
        $oh->day_friday = $data["day_friday"];
        $oh->day_saturday = $data["day_saturday"];
        $oh->day_sunday = $data["day_sunday"];
        $oh->repeat = $data["repeat"];
        $oh->halfday_closed_general = $data["halfday_closed_general"];
        $oh->lunch_general = $data["lunch_general"];
        $oh->start_general = $data["start_general"];
        $oh->end_general = $data["end_general"];
        $oh->lunch_start = $data["lunch_start"];
        $oh->lunch_end = $data["lunch_end"];
        $oh->halfday_closed_monday = $data["halfday_closed_monday"];
        $oh->lunch_monday = $data["lunch_monday"];
        $oh->start_monday = $data["start_monday"];
        $oh->end_monday = $data["end_monday"];
        $oh->lunch_start_monday = $data["lunch_start_monday"];
        $oh->lunch_end_monday = $data["lunch_end_monday"];
        $oh->halfday_closed_tuesday = $data["halfday_closed_tuesday"];
        $oh->lunch_tuesday = $data["lunch_tuesday"];
        $oh->start_tuesday = $data["start_tuesday"];
        $oh->end_tuesday = $data["end_tuesday"];
        $oh->lunch_start_tuesday = $data["lunch_start_tuesday"];
        $oh->lunch_end_tuesday = $data["lunch_end_tuesday"];
        $oh->halfday_closed_wednesday = $data["halfday_closed_wednesday"];
        $oh->lunch_wednesday = $data["lunch_wednesday"];
        $oh->start_wednesday = $data["start_wednesday"];
        $oh->end_wednesday = $data["end_wednesday"];
        $oh->halfday_closed_thursday = $data["halfday_closed_thursday"];
        $oh->lunch_thursday = $data["lunch_thursday"];
        $oh->lunch_start_thursday = $data["lunch_start_thursday"];
        $oh->lunch_end_thursday = $data["lunch_end_thursday"];
        $oh->halfday_closed_friday = $data["halfday_closed_friday"];
        $oh->lunch_friday = $data["lunch_friday"];
        $oh->start_friday = $data["start_friday"];
        $oh->end_friday = $data["end_friday"];
        $oh->halfday_closed_saturday = $data["halfday_closed_saturday"];
        $oh->lunch_saturday = $data["lunch_saturday"];
        $oh->start_saturday = $data["start_saturday"];
        $oh->end_saturday = $data["end_saturday"];
        $oh->lunch_start_saturday = $data["lunch_start_saturday"];
        $oh->lunch_end_saturday = $data["lunch_end_saturday"];
        $oh->halfday_closed_sunday = $data["halfday_closed_sunday"];
        $oh->lunch_sunday = $data["lunch_sunday"];
        $oh->start_sunday = $data["start_sunday"];
        $oh->end_sunday = $data["end_sunday"];
        $oh->lunch_start_sunday = $data["lunch_start_sunday"];
        $oh->lunch_end_sunday = $data["lunch_end_sunday"];
        $oh->save();
        Toast::info('Öffnungszeiten wurden in die DB geschrieben');
    }

    public function createOrUpdate_specification(CalendarSpecification $specification, Request $request)
    {
        $specification->fill($request->get('specification'))->save();
        Alert::info('You have successfully added some specifications.');
    }

    public function createOrUpdate_gastrotable(CalendarGastrotable $gastrotable, Request $request)
    {
        $data = $request->get('gastrotable');
        Log::info($data);
        $calendar_id = $data["calendar_id"];

        for ($i = 0; $i < (count($data) - 1); $i++) {
            Log::info($data[$i]["Tischgrösse"]) . '<br>';
            Log::info($data[$i]["Verfügbare Tische"]) . '<br>';
            Log::info($data["calendar_id"]) . '<br>';
            $size = $data[$i]["Tischgrösse"];
            $count = $data[$i]["Verfügbare Tische"];
            $calendar_id = $data["calendar_id"];
            $gastrotable = new CalendarGastrotable;
            $gastrotable->calendar_id = $calendar_id;
            $gastrotable->gastrotable = $size;
            $gastrotable->gastrotable_number = $count;
            $gastrotable->save();
            Toast::info(__('Lizenz wurde gespeichert.'));
        }
    }
    public function createOrUpdate_service_employees(CalendarServiceEmployees $service_employees, Request $request)
    {
        $data = $request->get('service_employees');
        $calendar_id = $data["calendar_id"];

        for ($i = 0; $i < (count($data) - 1); $i++) {
            $name = $data[$i]["Mitarbeiter/in"];
            $function = $data[$i]["Funktion"];
            $calendar_id = $data["calendar_id"];
            $service_employees = new CalendarServiceEmployees;
            $service_employees->calendar_id = $calendar_id;
            $service_employees->employee_name = $name;
            $service_employees->employee_function = $function;
            $service_employees->save();
            Toast::info(__('Mitarbeiter wurde gespeichert.'));
        }
    }
    public function createOrUpdate_rooms(CalendarRooms $rooms, Request $request)
    {
        $data = $request->get('rooms');
        $calendar_id = $data["calendar_id"];

        for ($i = 0; $i < (count($data) - 1); $i++) {
            $name = $data[$i]["Raum-Name"];
            $capacity = $data[$i]["Max. Personenanzahl"];
            $assets = $data[$i]["Ausstattung"];
            $calendar_id = $data["calendar_id"];
            $service_employees = new CalendarRooms;
            $service_employees->calendar_id = $calendar_id;
            $service_employees->name = $name;
            $service_employees->capacity = $capacity;
            $service_employees->assets = $assets;
            $service_employees->save();
            Toast::info(__('Räume wurden gespeichert.'));
        }
    }
    public function createOrUpdate_sports(CalendarSports $sports, Request $request)
    {
        $sports->fill($request->get('sports'))->save();
        Alert::info('Sportplatz wurde hinzugefügt.');
    }
}
