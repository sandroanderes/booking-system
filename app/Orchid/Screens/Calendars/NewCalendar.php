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

    
    /* Validation All */
    public function validate_all(Request $request)
    {
        $data_general = $request->get('calendar');
        if ($data_general["template"] == "none"){
            // General
            $this->validate_general($request);



           
        }

        if ($data_general["template"] == "gastronomy"){

        }

        if ($data_general["template"] == "sports"){

        }

        if ($data_general["template"] == "room"){

        }

        if ($data_general["template"] == "services"){

        }


        // Calendar General Eingaben
        

        // Calendar Openinghours Eingaben
        function validate_opening_hours(Request $request)
        {
            $data_oh = $request->get('oh');
            $msg_oh = "Fehlende Angaben: ";
            $error_oh = false;

            if (!empty($data_oh["repeat"]) && empty($data_oh["start_general"])) {
                $error_oh = true;
                $msg_oh .= "Generell geöffnet ab? ";
                Toast::error(__($msg_oh));
            }
            if (!empty($data_oh["repeat"]) && empty($data_oh["end_general"])) {
                $error_oh = true;
                $msg_oh .= "Generell geschlossen ab? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_monday"]) && empty($data_oh["start_monday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Montag?";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_monday"]) && empty($data_oh["end_monday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Montag? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_tuesday"]) && empty($data_oh["start_tuesday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Dienstag? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_tuesday"]) && empty($data_oh["end_tuesday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Dienstag? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_wednesday"]) && empty($data_oh["start_wednesday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Mittwoch? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_wednesday"]) && empty($data_oh["end_wednesday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Mittwoch? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_thursday"]) && empty($data_oh["start_thursday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Donnerstag? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_thursday"]) && empty($data_oh["end_thursday"])) {
                $msg_oh .= "Öffnungszeiten Donnerstag? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_friday"]) && empty($data_oh["start_friday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Freitag? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_friday"]) && empty($data_oh["end_friday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Freitag? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_saturday"]) && empty($data_oh["start_saturday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Samstag? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_saturday"]) && empty($data_oh["end_saturday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Samstag? ";
                Toast::error(__($msg_oh));
            }
            if (empty($data_oh["repeat"]) && !empty($data_oh["day_sunday"]) && empty($data_oh["start_sunday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Sonntag? ";
                Toast::error(__($msg_oh));
            } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_sunday"]) && empty($data_oh["end_sunday"])) {
                $error_oh = true;
                $msg_oh .= "Öffnungszeiten Sonntag? ";
                Toast::error(__($msg_oh));
            }
        }

        // Calendar Specifications Eingabe
        function validate_gastrotable(Request $request)
        {
            $data_gastrotable = $request->get('gastrotable');
            $msg_gastrotable = "Fehlerhafte Eingabe: ";
            $error_spec = false;

            for ($i = 0; $i < (count($data_gastrotable) - 1); $i++) {
                if (!is_numeric($count = $data_gastrotable[$i]["Verfügbare Tische"])) {
                    $msg_gastrotable = "Verfügbare Tische";
                    $error_spec = true;
                    Toast::error(__($msg_gastrotable));
                    break;
                }
            }
        }

        function validate_rooms(Request $request)
        {
            $data_rooms = $request->get('rooms');
            $msg_rooms = "Fehlerhafte Eingabe: ";
            $error_spec = false;

            for ($i = 0; $i < (count($data_rooms) - 1); $i++) {
                if (!is_numeric($data_rooms[$i]["Max. Personenanzahl"])) {
                    $msg_rooms .= "Verfügbare Tische";
                    $error_spec = true;
                    Toast::error(__($msg_rooms));
                    break;
                }
            }
        }

        function validate_sports(Request $request){
            $data_sports = $request->get('sports');
            $msg_sports = "Fehlerhafte Eingabe";
            $error_spec = false;

            if (!is_numeric($data_sports["number"])) {
                $msg_sports .= "Anzahl Sport geben Sie eine Zahl ein";
                $error_spec = true;
            } elseif (empty($data_sports["name"])) {
                $msg_sports .= "Tragen Sie einen Namen für Ihre Sportaktivitätein";
                $error_spec = true;
            }
        }
    }

    public function validate_general($request)
        {
            $data_general = $request->get('calendar');
            $msg_general = "";
            $error_general = false;

            if (empty($data_general["name"])) {
                $msg_general .= "Kalendername? ";
                Toast::error(__($msg_general));
                $error_general = true;
            }
            if (empty($data_general["street"])) {
                $msg_general .= "Strasse? ";
                Toast::error(__($msg_general));
                $error_general = true;
            }
            if (empty($data_general["location"])) {
                $msg_general .= "Ort? ";
                Toast::error(__($msg_general));
                $error_general = true;
            }
            if (empty($data_general["description"])) {
                $msg_general .= "Beschreibung? ";
                Toast::error(__($msg_general));
                $error_general = true;
            }
            if ($data_general["template"] == "none" && empty($data_general["unit"])) {
                $msg_general .= "Reservationsobjekt?";
                Toast::error(__($msg_general));
                $error_general = true;
            }
            return $error_general;
        }
    /* DB Uploads */
    public function createOrUpdate(CalendarGeneral $calendar, Request $request)
    {
        $data = $request->get('calendar');
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
    }

    public function createOrUpdate_gastrotable(CalendarGastrotable $gastrotable, Request $request)
    {
        $data = $request->get('gastrotable');
        $calendar_id = $data["calendar_id"];

        for ($i = 0; $i < (count($data) - 1); $i++) {
            $size = $data[$i]["Tischgrösse"];
            $count = $data[$i]["Verfügbare Tische"];
            $calendar_id = $data["calendar_id"];
            $gastrotable = new CalendarGastrotable;
            $gastrotable->calendar_id = $calendar_id;
            $gastrotable->gastrotable = $size;
            $gastrotable->gastrotable_number = $count;
            $gastrotable->save();
            Toast::info(__('Tische wurden gespeichert'));
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
            $rooms = new CalendarRooms;
            $rooms->calendar_id = $calendar_id;
            $rooms->name = $name;
            $rooms->capacity = $capacity;
            $rooms->assets = $assets;
            $rooms->save();
            Toast::info(__('Räume wurden gespeichert.'));
        }
    }
    public function createOrUpdate_sports(CalendarSports $sports, Request $request)
    {
        $sports->fill($request->get('sports'))->save();
        Toast::info('Sportplatz wurde hinzugefügt.');
    }
}