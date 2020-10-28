<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Action;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;

// DB
use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarNew extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Neuen Kalender erstellen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'In diesem Abschnitt können Sie anhand eines neuen Kalenders, ein eigenes Reservationssystem erstellen.';

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
            ModalToggle::make('Kalender-Guide starten')
                ->modal('calendarGuide')
                ->method('showToast')
                ->icon('user'),
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
            
            // Kalender Guide
            Layout::modal('calendarGuide', [
                Layout::rows([]),
            ])
            ->title('Kalender Guide')
            ->applyButton('Weiter')
            ->closeButton('Schliessen'),

            // Persönliche Angaben
            Layout::rows([
                Group::make([
                    Input::make('calendar.firstname')
                        ->title('Vorname')
                        ->type('text')
                        ->required(),
                    Input::make('calendar.lastname')
                        ->title('Nachname')
                        ->type('text')
                        ->required(),
                ]), 
                Group::make([   
                    Input::make('calendar.private_email')
                        ->title('Persönliche Email-Adresse')
                        ->type('email')
                        ->help('Über welche Email-Adresse dürfen wir Sie kontaktieren?')
                        ->required(),
                    Input::make('calendar.public_email')
                        ->title('Öffentliche Email-Adresse')
                        ->type('email')
                        ->help('Über welche Email-Adresse können Kunden Sie erreichen?')
                        ->required(),
                    Input::make('calendar.public_phoneNr')
                        ->placeholder('+41 81 234 56 78')
                        ->title('Öffentliche TelefonNr.')
                        ->help('Über welche Telefonnummer können Kunden Sie erreichen?')
                        ->required(),
                ]),
                Input::make('calendar.user_id')
                    ->type('integer')
                    ->value(Auth::id())
                    ->hidden(),
                Group::make([
                    Input::make('calendar.company_name')
                        ->title('Name')
                        ->type('text')
                        ->help('Wie heisst Ihr Unternhemen / Ihre Organisation?')
                        ->required(),
                    Select::make('calendar.branch')
                        ->options([
                            'andere' => 'Andere ...',
                            'gastronomie'   => 'Gastronomie',
                            'sportplaetze' => 'Sport-Plätze',
                            'raeumlichkeiten' => 'Räumlichkeiten',
                            'dienstleistungen' => 'Dienstleitung',
                        ])
                        ->title('Branche auswählen')
                        ->help('Für welche Branche möchten Sie ein Reservationssystem erstellen?')
                        ->required(),
                ]),
                Input::make('calendar.website_url')
                    ->title('Webseite')
                    ->placeholder('https://weburl.com')
                    ->type('url')
                    ->help('Unter welcher URL gelangen Kunden auf Ihre Webseite?'),
            ])->title('Persönliche Angaben'), 
            
            // Angaben zum Kalender
            Layout::rows([
                Group::make([
                    Input::make('calendar.calendar_name')
                        ->title('Name des Reservationssystems')
                        ->type('text')
                        ->help('Unter welchem Namen soll Ihr Reservationssystem angezeigt werden?')
                        ->required(),
                    Select::make('calendar.calendar_format')
                        ->options([
                            'dayview' => 'Tagesansicht',
                            'fivedayview' => 'Fünftagesansicht',
                            'weekview'   => 'Wochenansicht',
                            'monthview' => 'Monatsansicht',
                        ])
                        ->title('Standard Kalenderformat')
                        ->help('Welches Kalenderformat soll standardmässig angezeigt werden?')
                        ->required(),
                ]),
                TextArea::make('calendar.description')
                    ->title('Beschreibung')
                    ->rows(5)
                    ->help('Was kann man hier reservieren?')
                    ->required(),
                Group::make([
                    DateTimer::make('calendar.period_from')
                        ->title('Reservationszeitraum Von:')
                        ->noCalendar()
                        ->format('h:i K')
                        ->help('Ab wann kann reserviert werden?'),
                    DateTimer::make('calendar.period_until')
                        ->title('Reservationszeitraum Bis:')
                        ->noCalendar()
                        ->format('h:i K')
                        ->help('Bis wann kann reserviert werden??')   
                ]),
                Group::make([
                    Select::make('calendar.min_duration')
                    ->options([
                        '0.25' => '15 min',
                        '0.5' => '30 min',
                        '0.75'   => '45 min',
                        '1.5' => '1.5 h',
                        '2' => '2 h',
                        '2.5' => '2.5 h',
                        '3'   => '3 h',
                        '4' => '4 h',
                        '5' => '5 h',
                        '6' => '6 h',
                        '7'   => '7 h',
                        '8' => '8 h',
                        '1d' => '1d',
                        '2d'   => '2d',
                        '3d' => '3d',
                        '4d' => '4d',
                        '5d'   => '5d',
                        '6d' => '6d',
                        '7d' => '7d',
                        '8d' => '8d',
                        '9d'   => '9d',
                        '10d' => '10d',
                    ])
                    ->title('Min. Reservationsdauer')
                    ->help('Wie lange kann minimal reserviert werden?'),
                    Select::make('calendar.max_duration')
                    ->options([
                        '0.5' => '30 min',
                        '0.75'   => '45 min',
                        '1.5' => '1.5 h',
                        '2' => '2 h',
                        '2.5' => '2.5 h',
                        '3'   => '3 h',
                        '4' => '4 h',
                        '5' => '5 h',
                        '6' => '6 h',
                        '7'   => '7 h',
                        '8' => '8 h',
                        '1d' => '1d',
                        '2d'   => '2d',
                        '3d' => '3d',
                        '4d' => '4d',
                        '5d'   => '5d',
                        '6d' => '6d',
                        '7d' => '7d',
                        '8d' => '8d',
                        '9d'   => '9d',
                        '10d' => '10d',
                    ])
                    ->title('Max. Reservationsdauer')
                    ->help('Wie lange kann maximal reserviert werden?')  
                ]),
                Select::make('calendar.fixed_duration')
                    ->options([
                        '0.5' => '30 min',
                        '0.75'   => '45 min',
                        '1.5' => '1.5 h',
                        '2' => '2 h',
                        '2.5' => '2.5 h',
                        '3'   => '3 h',
                        '4' => '4 h',
                        '5' => '5 h',
                        '6' => '6 h',
                        '7'   => '7 h',
                        '8' => '8 h',
                        '1d' => '1d',
                        '2d'   => '2d',
                        '3d' => '3d',
                        '4d' => '4d',
                        '5d'   => '5d',
                        '6d' => '6d',
                        '7d' => '7d',
                        '8d' => '8d',
                        '9d'   => '9d',
                        '10d' => '10d',
                    ])
                    ->title('Fixe Reservationsdauer')
                    ->help('Wie lange dauert ein Reservationsblock?'), 
                Group::make([
                    CheckBox::make('calendar.allday_reservation')
                        ->value(1)
                        ->title('Nur Ganztägige Reservationen')
                        ->placeholder('Reservationen ganztäglich')
                        ->help('Kann ein ganzer Tag reserviert werden?'),
                    CheckBox::make('calendar.private_link')
                        ->value(1)
                        ->title('Privater Kalender')
                        ->placeholder('Privaten Link zum Kalender erstellen')
                        ->help('Möchten Sie, dass Ihr Kalender nur über einen privaten Link zugänglich ist?'),
                ]),
                Button::make('Speichern')
                    ->method('createCalendar')
                    ->type(Color::PRIMARY()),
            ])->title('Angaben zum Kalender'), 
        ];
    }

    public function createCalendar(Calendar $calendar, Request $request)
    {
        $calendar->fill($request->get('calendar'))->save();
        Alert::warning('Der Kalender wurde gespeichert.');
        return redirect()->route('platform.CalendarOverview');
    }
}
