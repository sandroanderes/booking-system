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
    public function createOrUpdate(CalendarGeneral $calendar, Request $request)
    {
        $calendar->fill($request->get('calendar'))->save();
        Alert::info('Allgemeine Einstellungen wurden in die DB geschrieben');
    }

    public function createOrUpdate_Oh(CalendarOpeninghours $oh, Request $request)
    {
        $oh->fill($request->get('oh'))->save();
        Alert::info('You have successfully added some openinghours.');
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
            $service_employees->name = $name;
            $service_employees->function = $function;
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
