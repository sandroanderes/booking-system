<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Action;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateRange;
use Orchid\Screen\Fields\DateTimer;

class newCalendar extends Screen
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
                    Input::make('firstname')
                        ->title('Vorname')
                        ->type('text')
                        ->required(),
                    Input::make('lastname')
                        ->title('Nachname')
                        ->type('text')
                        ->required(),
                ]),    
                Input::make('email')
                    ->title('Persönliche Email-Adresse')
                    ->type('email')
                    ->required(),
            ])->title('Persönliche Angaben'),  

            // Angaben zum Unternehmen
            Layout::rows([
                Group::make([
                    Input::make('compamyname')
                        ->title('Name')
                        ->type('text')
                        ->help('Wie heisst Ihr Unternhemen?')
                        ->required(),
                    Select::make('branch')
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
                TextArea::make('description')
                    ->title('Beschreibung')
                    ->rows(5)
                    ->help('Was kann man hier reservieren?')
                    ->required(),
                Group::make([
                    Input::make('email')
                        ->title('Öffentliche Email-Adresse')
                        ->type('email')
                        ->help('Über welche Email-Adresse können Kunden Sie erreichen?')
                        ->required(),
                    Input::make('phone')
                        ->mask('+41 81 234 56 78')
                        ->title('Öffentliche TelefonNr.')
                        ->help('Über welche Telefonnummer können Kunden Sie erreichen?')
                ]),
                Group::make([
                    Input::make('website')
                    ->title('Webseite')
                    ->type('url')
                    ->help('Unter welcher URL gelangen Kunden auf Ihre Webseite?'),

                    CheckBox::make('publicCalendar')
                    ->value(1)
                    ->title('Öffentlicher Kalender')
                    ->placeholder('Kalender veröffentlichen')
                    ->help('Möchten Sie, dass Ihr Kalender öffentlich zugänglich ist?'),
                ]),
            ])->title('Angaben zum Unternehmen'),
            
            // Angaben zum Kalender
            Layout::rows([
                Group::make([
                    Input::make('calendername')
                        ->title('Name des Reservationssystems')
                        ->type('text')
                        ->help('Unter welchem Namen soll Ihr Reservationssystem angezeigt werden?')
                        ->required(),
                    Select::make('calendarformat')
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
                Group::make([
                    DateTimer::make('reservationperiod_start')
                        ->title('Reservationszeitraum Von:')
                        ->noCalendar()
                        ->format('h:i K')
                        ->help('Ab wann kann reserviert werden?'),
                    DateTimer::make('reservationperiod_end')
                        ->title('Reservationszeitraum Bis:')
                        ->noCalendar()
                        ->format('h:i K')
                        ->help('Bis wann kann reserviert werden??')   
                ]),
                Group::make([
                    Select::make('minreservation')
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
                    Select::make('maxreservation')
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
                Select::make('fixreservation')
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
                CheckBox::make('alldayreservation')
                    ->value(1)
                    ->title('Nur Ganztägige Reservationen')
                    ->placeholder('Reservationen ganztäglich')
                    ->help('Kann ein ganzer Tag reserviert werden?'),

                Button::make('Speichern')
                    ->method('buttonClickProcessing')
                    ->type(Color::PRIMARY()),
            ])->title('Angaben zum Kalender'),  
        ];
    }
    public function buttonClickProcessing()
    {
        Alert::warning('Ihre Angaben wurden Zwischengespeichert.');
    }
}
