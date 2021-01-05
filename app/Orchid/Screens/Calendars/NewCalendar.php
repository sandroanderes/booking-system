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

class NewCalendar extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Neuer Buecher hinzufügen';

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
    public function query(): array
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


    /* ======================== Validation ========================  */
    public function validate_all(Request $request)
    {
        // Call for Validation
        $this->validate_general($request);
        $this->validate_opening_hours($request);

        $data_general = $request->get('calendar');
        if ($data_general["template"] == "gastronomy") {
            $this->validate_gastrotable($request);
        }

        if ($data_general["template"] == "sports") {
            $this->validate_sports($request);
        }

        if ($data_general["template"] == "room") {
            $this->validate_rooms($request);
        }

        if ($data_general["template"] == "services") {
            $this->validate_service($request);
        }
    }

    // General Validation
    public function validate_general($request)
    {
        $data_general = $request->get('calendar');
        $msg_general = "";

        if (empty($data_general["name"])) {
            $msg_general .= "<li>Trage einen Namen für deinen Buecher ein.</li>";
        }
        if (empty($data_general["street"])) {
            $msg_general .= "<li>Trage eine Strasse ein.</li>";
        }
        if (empty($data_general["location"])) {
            $msg_general .= "<li>Trage einen Ort ein.</li>";
        }
        if (empty($data_general["description"])) {
            $msg_general .= "<li>Trage eine Beschreibung ein.</li>";
        }
        if ($data_general["template"] == "none" && empty($data_general["unit"])) {
            $msg_general .= "<li>Gib ein Reservationsobjekt an.</li>";
        }
        return $msg_general;
    }

    // Opening Hours Validation
    public function validate_opening_hours($request)
    {
        $data_oh = $request->get('oh');
        $msg_oh = "";

        if (!empty($data_oh["repeat"]) && empty($data_oh["start_general"])) {
            $msg_oh .= "<li>Generelle Öffnungszeiten eintragen.</li>";
        }elseif (!empty($data_oh["repeat"]) && empty($data_oh["end_general"])) {
            $msg_oh .= "<li>Generelle Öffnungszeiten eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_monday"]) && empty($data_oh["start_monday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Montag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_monday"]) && empty($data_oh["end_monday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Montag eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_tuesday"]) && empty($data_oh["start_tuesday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Dienstag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_tuesday"]) && empty($data_oh["end_tuesday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Dienstag eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_wednesday"]) && empty($data_oh["start_wednesday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Mittwoch eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_wednesday"]) && empty($data_oh["end_wednesday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Mittwoch eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_thursday"]) && empty($data_oh["start_thursday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Donnerstag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_thursday"]) && empty($data_oh["end_thursday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Donnerstag eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_friday"]) && empty($data_oh["start_friday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Freitag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_friday"]) && empty($data_oh["end_friday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Freitag eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_saturday"]) && empty($data_oh["start_saturday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Samstag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_saturday"]) && empty($data_oh["end_saturday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Samstag eintragen.</li>";
        }
        if (empty($data_oh["repeat"]) && !empty($data_oh["day_sunday"]) && empty($data_oh["start_sunday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Sonntag eintragen.</li>";
        } elseif (empty($data_oh["repeat"]) && !empty($data_oh["day_sunday"]) && empty($data_oh["end_sunday"])) {
            $msg_oh .= "<li>Öffnungszeiten am Sonntag eintragen.</li>";
        }
        return $msg_oh;
    }

    // Gastrotable Validation
    public function validate_gastrotable($request)
    {
        $data_gastrotable = $request->get('gastrotable');
        $msg_gastrotable = "";

        for ($i = 0; $i <= (count($data_gastrotable) - 1); $i++) {
            if (empty($data_gastrotable[$i]["Verfügbare Tische"])) {
                $msg_gastrotable .= "<li>Trage die Anzahl verfügbarer Tische ein.</li>";
                break;
            } elseif (!is_numeric($data_gastrotable[$i]["Verfügbare Tische"])) {
                $msg_gastrotable .= "<li>Trage eine Zahl für verfügbare Tische ein.</li>";
                break;
            }
        }
        return $msg_gastrotable;
    }

    // Sports Validation
    public function validate_sports($request)
    {
        $data_sports = $request->get('sports');
        $msg_sports = "";

        if (empty($data_sports["name"])) {
            $msg_sports .= "<li>Trage einen Namen für deine Sportaktivitätein.</li>";
        }
        if (empty($data_sports["number"])) {
            $msg_sports .= "<li>Trage eine Anzahl <i>Sportplätze oder Ähnliches</i> ein.</li>";
        } elseif (!is_numeric($data_sports["number"])) {
            $msg_sports .= "<li>Gib die Anzahl <i>Sportplätze oder Ähnliches</i> als Zahl an.</li>";
        }
        return $msg_sports;
    }

    // Rooms Validation
    public function validate_rooms($request)
    {
        $data_rooms = $request->get('rooms');
        $msg_rooms = "";

        for ($i = 0; $i <= (count($data_rooms) - 1); $i++) {
            if (empty($data_rooms[$i]["Raum-Name"])) {
                $msg_rooms .= "<li>Trage einen Namen für deinen Raum ein.</li>";
            }
            if (empty($data_rooms[$i]["Max. Personenanzahl"])) {
                $msg_rooms .= "<li>Trage die Max. Personenzahl ein.</li>";
            } elseif (!is_numeric($data_rooms[$i]["Max. Personenanzahl"])) {
                $msg_rooms .= "<li>Trage eine <i>Zahl</i> für die Max. Personenzahl ein.</li>";
                break;
            }
            if (empty($data_rooms[$i]["Raum-Name"]) || empty($data_rooms[$i]["Max. Personenanzahl"])){
                break;
            }
        }
        return $msg_rooms;
    }

    // Service Validation
    public function validate_service($request)
    {
        $data_service = $request->get('service_employees');
        $msg_service = "";

        if (empty($data_service["service_name"])) {
            $msg_service .= "<li>Trage einen Namen für deine Dienstleistung ein.</li>";
        }
        return $msg_service;
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

    public function createOrUpdate_Oh(CalendarOpeninghours $oh, Request $request, $calendar_id)
    {
        $data_oh = $request->get('oh');
        $oh->calendar_id = $calendar_id;
        $oh->day_monday = $data_oh["day_monday"];
        $oh->day_tuesday = $data_oh["day_tuesday"];
        $oh->day_wednesday = $data_oh["day_wednesday"];
        $oh->day_thursday = $data_oh["day_thursday"];
        $oh->day_friday = $data_oh["day_friday"];
        $oh->day_saturday = $data_oh["day_saturday"];
        $oh->day_sunday = $data_oh["day_sunday"];
        $oh->repeat = $data_oh["repeat"];
        $oh->halfday_closed_general = $data_oh["halfday_closed_general"];
        $oh->lunch_general = $data_oh["lunch_general"];
        $oh->start_general = $data_oh["start_general"];
        $oh->end_general = $data_oh["end_general"];
        $oh->lunch_start = $data_oh["lunch_start"];
        $oh->lunch_end = $data_oh["lunch_end"];
        $oh->halfday_closed_monday = $data_oh["halfday_closed_monday"];
        $oh->lunch_monday = $data_oh["lunch_monday"];
        $oh->start_monday = $data_oh["start_monday"];
        $oh->end_monday = $data_oh["end_monday"];
        $oh->lunch_start_monday = $data_oh["lunch_start_monday"];
        $oh->lunch_end_monday = $data_oh["lunch_end_monday"];
        $oh->halfday_closed_tuesday = $data_oh["halfday_closed_tuesday"];
        $oh->lunch_tuesday = $data_oh["lunch_tuesday"];
        $oh->start_tuesday = $data_oh["start_tuesday"];
        $oh->end_tuesday = $data_oh["end_tuesday"];
        $oh->lunch_start_tuesday = $data_oh["lunch_start_tuesday"];
        $oh->lunch_end_tuesday = $data_oh["lunch_end_tuesday"];
        $oh->halfday_closed_wednesday = $data_oh["halfday_closed_wednesday"];
        $oh->lunch_wednesday = $data_oh["lunch_wednesday"];
        $oh->start_wednesday = $data_oh["start_wednesday"];
        $oh->end_wednesday = $data_oh["end_wednesday"];
        $oh->halfday_closed_thursday = $data_oh["halfday_closed_thursday"];
        $oh->lunch_thursday = $data_oh["lunch_thursday"];
        $oh->lunch_start_thursday = $data_oh["lunch_start_thursday"];
        $oh->lunch_end_thursday = $data_oh["lunch_end_thursday"];
        $oh->halfday_closed_friday = $data_oh["halfday_closed_friday"];
        $oh->lunch_friday = $data_oh["lunch_friday"];
        $oh->start_friday = $data_oh["start_friday"];
        $oh->end_friday = $data_oh["end_friday"];
        $oh->halfday_closed_saturday = $data_oh["halfday_closed_saturday"];
        $oh->lunch_saturday = $data_oh["lunch_saturday"];
        $oh->start_saturday = $data_oh["start_saturday"];
        $oh->end_saturday = $data_oh["end_saturday"];
        $oh->lunch_start_saturday = $data_oh["lunch_start_saturday"];
        $oh->lunch_end_saturday = $data_oh["lunch_end_saturday"];
        $oh->halfday_closed_sunday = $data_oh["halfday_closed_sunday"];
        $oh->lunch_sunday = $data_oh["lunch_sunday"];
        $oh->start_sunday = $data_oh["start_sunday"];
        $oh->end_sunday = $data_oh["end_sunday"];
        $oh->lunch_start_sunday = $data_oh["lunch_start_sunday"];
        $oh->lunch_end_sunday = $data_oh["lunch_end_sunday"];
        return $oh->save();
    }

    public function createOrUpdate_specification(CalendarSpecification $specification, Request $request, $calendar_id)
    {
        $data_specification = $request->get('specification');
        $specification->calendar_id = $calendar_id;
        $specification->format = $data_specification["format"];
        $specification->duration_fixed = $data_specification["duration_fixed"];
        $specification->duration_all = $data_specification["duration_all"];
        $specification->duration_min_min = $data_specification["duration_min_min"];
        $specification->duration_min_h = $data_specification["duration_min_h"];
        $specification->duration_min_d = $data_specification["duration_min_d"];
        $specification->duration_max_min = $data_specification["duration_max_min"];
        $specification->duration_max_h = $data_specification["duration_max_h"];
        $specification->duration_max_d = $data_specification["duration_max_d"];
        return $specification->save();
    }

    public function createOrUpdate_gastrotable(CalendarGastrotable $gastrotable, Request $request, $calendar_id)
    {
        $data_gastrotbl = $request->get('gastrotable');
        for ($i = 0; $i <= (count($data_gastrotbl) - 1); $i++) {
            $size = $data_gastrotbl[$i]["Tischgrösse"];
            $count = $data_gastrotbl[$i]["Verfügbare Tische"];
            $gastrotable = new CalendarGastrotable;
            $gastrotable->calendar_id = $calendar_id;
            $gastrotable->gastrotable = $size;
            $gastrotable->gastrotable_number = $count;
            $error = $gastrotable->save();
            if ($error == 0) {
                return $error;
                break;
            }
        }
        return 1;
    }
    public function createOrUpdate_service_employees(CalendarServiceEmployees $service_employees, Request $request, $calendar_id)
    {
        $data_employ = $request->get('service_employees');
        $service_name = $data_employ["service_name"];

        for ($i = 0; $i < (count($data_employ) - 1); $i++) {
            $employee_name = $data_employ[$i]["Name"];
            $function = $data_employ[$i]["Funktion"];
            $service_employees = new CalendarServiceEmployees;
            $service_employees->calendar_id = $calendar_id;
            $service_employees->service_name = $service_name;
            $service_employees->employee_name = $employee_name;
            $service_employees->employee_function = $function;
            $error = $service_employees->save();
            if ($error == 0) {
                return $error;
                break;
            }
        }
        return 1;
    }
    public function createOrUpdate_rooms(CalendarRooms $rooms, Request $request, $calendar_id)
    {
        $data_room = $request->get('rooms');
        for ($i = 0; $i <= (count($data_room) - 1); $i++) {
            $name = $data_room[$i]["Raum-Name"];
            $capacity = $data_room[$i]["Max. Personenanzahl"];
            $assets = $data_room[$i]["Ausstattung"];

            $rooms = new CalendarRooms;
            $rooms->calendar_id = $calendar_id;
            $rooms->name = $name;
            $rooms->capacity = $capacity;
            $rooms->assets = $assets;
            $error =  $rooms->save();
            if ($error == 0) {
                return $error;
                break;
            }
        }
        return 1;
    }
    public function createOrUpdate_sports(CalendarSports $sports, Request $request, $calendar_id)
    {
        $data_sports = $request->get('sports');
        $sports->calendar_id = $calendar_id;
        $sports->name = $data_sports["name"];
        $sports->number = $data_sports["number"];
        return $sports->save();
    }

    /* ======================== Validate & Upload Calendar ========================  */
    public function db_upload(CalendarGeneral $calendar, CalendarOpeninghours $oh, CalendarSpecification $specification, CalendarGastrotable $gastrotable, CalendarSports $sports, CalendarRooms $rooms, CalendarServiceEmployees $service_employees, Request $request)
    {
        /* ==================== 1. Validate ====================   */
        // Set Default errormsg ""
        $errormsg_general = "";
        $errormsg_sports = "";
        $errormsg_gastro = "";
        $errormsg_sports = "";
        $errormsg_rooms = "";
        $errormsg_services = "";

        $errormsg_general = $this->validate_general($request);
        $errormsg_oh = $this->validate_opening_hours($request);

        $data_general = $request->get('calendar');
        if ($data_general["template"] == "gastronomy") {
            $errormsg_gastro = $this->validate_gastrotable($request);
        }

        if ($data_general["template"] == "sports") {
            $errormsg_sports = $this->validate_sports($request);
        }

        if ($data_general["template"] == "room") {
            $errormsg_rooms = $this->validate_rooms($request);
        }

        if ($data_general["template"] == "services") {
            $errormsg_services = $this->validate_service($request);
        }

        if ($errormsg_general !== "" || $errormsg_oh !== "" || $errormsg_gastro !== "" || $errormsg_sports !== "" || $errormsg_rooms !== "" || $errormsg_services !== "") {
            $msg = '<b style="font-size: larger;">Fehlende oder falsche Angaben:</b><br><br>';
            if ($errormsg_general){
                $msg .= "<b>Schritt 1: Allgemeine Einstellungen</b><br>";
                $msg .= "<ul>";
                $msg .= "$errormsg_general";
                $msg .= "</ul><br>";
            }
            if ($errormsg_oh !== "") {
                $msg .= "<b>Schritt 2: Öffnungszeiten</b>";
                $msg .= "<ul>";
                $msg .= "$errormsg_oh";
                $msg .= "</ul><br>";
            }
            if ($errormsg_gastro !== "") {
                $msg .= "<b>Schritt 3: Reservations-Spezifikationen</b></br>";
                $msg .= "<ul>";
                $msg .= "$errormsg_gastro";
                $msg .= "</ul><br>";
            }
            if ($errormsg_sports !== ""){
                $msg .= "<b>Schritt 3: Reservations-Spezifikationen</b></br>";
                $msg .= "<ul>";
                $msg .= "$errormsg_sports";
                $msg .= "</ul><br>";
            }
            if ($errormsg_rooms !== ""){
                $msg .= "<b>Schritt 3: Reservations-Spezifikationen</b></br>";
                $msg .= "<ul>";
                $msg .= "$errormsg_rooms";
                $msg .= "</ul><br>";
            }
            if ($errormsg_services !== ""){
                $msg .= "<b>Schritt 3: Reservations-Spezifikationen</b></br>";
                $msg .= "<ul>";
                $msg .= "$errormsg_services";
                $msg .= "</ul><br>";
            }
            Alert::error($msg);

        /* ==================== 2. Upload ====================   */
        } else {
            $calendar_id = $this->createOrUpdate($calendar, $request);
            if ($calendar_id !== 0){
                $uploadValidation = $this->createOrUpdate_Oh($oh, $request, $calendar_id);
                if ($uploadValidation == 1){
                    $uploadValidation = $this->createOrUpdate_specification($specification, $request, $calendar_id);
                    if ($data_general["template"] == "none" && $uploadValidation == 1) {
                        Alert::success("Ihr Buecher wurde erfolgreich erstellt!");
                        } else {
                            Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten!"); 
                        }
                    if ($data_general["template"] == "gastronomy" && $uploadValidation == 1) {
                        $uploadValidation = $this->createOrUpdate_gastrotable($gastrotable, $request, $calendar_id);
                        if ($uploadValidation == 1){
                            Alert::success("Ihr Buecher wurde erfolgreich erstellt!");
                        } else {
                            Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten! Gastro"); 
                        }
                    }
                    if ($data_general["template"] == "sports" && $uploadValidation == 1) {
                        $uploadValidation = $this->createOrUpdate_sports($sports, $request, $calendar_id);
                        if ($uploadValidation == 1){
                            Alert::success("Ihr Buecher wurde erfolgreich erstellt!");
                        } else {
                            Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten!"); 
                        }
                    }
                    if ($data_general["template"] == "room" && $uploadValidation == 1) {
                        $uploadValidation = $this->createOrUpdate_rooms($rooms, $request, $calendar_id);
                        if ($uploadValidation == 1){
                            Alert::success("Ihr Buecher wurde erfolgreich erstellt!");
                        } else {
                            Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten! Raum"); 
                        }
                    }            
                    if ($data_general["template"] == "services" && $uploadValidation == 1) {
                        $uploadValidation = $this->createOrUpdate_service_employees($service_employees, $request, $calendar_id);
                        if ($uploadValidation == 1){
                            Alert::success("Ihr Buecher wurde erfolgreich erstellt!");
                        } else {
                            Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten! Service"); 
                        }
                    }
                } else {
                    Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten!");
                }
            } else {
                Alert::error("Beim Upload in die Datenbank ist ein Fehler Aufgetreten!");
            }
        }
    }
}
