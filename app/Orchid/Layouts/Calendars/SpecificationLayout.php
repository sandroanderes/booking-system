<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Matrix;


class SpecificationLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [

            Select::make('specification.format')
                ->options([
                    'daily'   => 'Tagesansicht',
                    'working days' => '5-Tagesansicht',
                    'weekly' => 'Wochenansicht',
                    'monthly'   => 'Monatsansicht',
                ])
                ->title('Kalenderformat wählen')
                ->value('weekly')
                ->help('In welchem Format soll dein Kalender standardmässig angezeigt werden?'),

            RadioButtons::make('specification.timeunit')
                ->required()
                ->title('Reservationsdauer in')
                ->options([
                    0 => 'Minuten',
                    1 => 'Stunden',
                    2 => 'Tage',
                ])
                ->help('Welches Zeitformat macht für deine Art von Reservationen am meisten Sinn?'),

            Switcher::make('specification.duration_fixed')
                ->sendTrueOrFalse()
                ->title('Fixes Reservationsintervall')
                ->value(true)
                ->help('Dauert eine Reservationseinheit bei dir immer gleich lang?'),

            Select::make('specification.duration_min_min')
                ->options([
                    '0.166' => '10 Minuten',
                    '0.25' => '15 Minuten',
                    '0.333' => '20 Minuten',
                    '0.5' => '30 Minuten',
                    '0.666' => '40 Minuten',
                    '0.75' => '45 Minuten',
                    '0.833' => '50 Minuten',
                ])
                ->title('Minimale Reservationsdauer in Minuten'),

            Select::make('specification.duration_min_h')
                ->options([
                    '1' => '1 Stunde',
                    '1.5' => '1.5 Stunden',
                    '2' => '2 Stunden',
                    '3' => '3 Stunden',
                    '4' => '4 Stunden',
                    '5' => '5 Stunden',
                    '6' => '6 Stunden',
                    '7' => '7 Stunden',
                    '8' => '8 Stunden',
                    '9' => '9 Stunden',
                    '10' => '10 Stunden',
                    '11' => '11 Stunden',
                    '12' => '12 Stunden',
                ])
                ->title('Minimale Reservationsdauer in Stunden'),
            Select::make('specification.duration_min_d')
                ->options([
                    '24' => '1 Tag',
                    '48' => '2 Tage',
                    '72' => '3 Tage',
                    '96' => '4 Tage',
                    '120' => '5 Tage',
                    '144' => '6 Tage',
                    '168' => '7 Tage',
                    '240' => '10 Tage',
                    '336' => '14 Tage',
                ])
                ->title('Minimale Reservationsdauer in Tagen'),

            Select::make('specification.duration_max_min')
                ->options([
                    '0.166' => '10 Minuten',
                    '0.25' => '15 Minuten',
                    '0.333' => '20 Minuten',
                    '0.5' => '30 Minuten',
                    '0.666' => '40 Minuten',
                    '0.75' => '45 Minuten',
                    '0.833' => '50 Minuten',
                ])
                ->title('Maximale Reservationsdauer in Minuten'),

            Select::make('specification.duration_max_h')
                ->options([
                    '1' => '1 Stunde',
                    '1.5' => '1.5 Stunden',
                    '2' => '2 Stunden',
                    '3' => '3 Stunden',
                    '4' => '4 Stunden',
                    '5' => '5 Stunden',
                    '6' => '6 Stunden',
                    '7' => '7 Stunden',
                    '8' => '8 Stunden',
                    '9' => '9 Stunden',
                    '10' => '10 Stunden',
                    '11' => '11 Stunden',
                    '12' => '12 Stunden',
                ])
                ->title('Maximale Reservationsdauer in Stunden'),
            Select::make('specification.duration_max_d')
                ->options([
                    '24' => '1 Tag',
                    '48' => '2 Tage',
                    '72' => '3 Tage',
                    '96' => '4 Tage',
                    '120' => '5 Tage',
                    '144' => '6 Tage',
                    '168' => '7 Tage',
                    '240' => '10 Tage',
                    '336' => '14 Tage',
                ])
                ->title('Maximale Reservationsdauer in Tagen'),



            Matrix::make('specification.gastro')
                ->title('Anzahl Tische')
                ->columns(['Tischgrösse', 'Verfügbare Tische'])
                ->maxRows(10)
                ->fields([
                    'Tischgrösse'   => Select::make('gastrotable')->type('text')->options([
                        '1' => '1er-Tisch',
                        '2' => '2er-Tisch',
                        '4' => '4er-Tisch',
                        '5' => '5er-Tisch',
                        '6' => '6er-Tisch',
                        '7' => '7er-Tisch',
                        '8' => '8er-Tisch'
                    ]),
                    'Verfügbare Tische' => Input::make('gastrotable_number')->type('number')->min(1),
                ])
                ->help('Klick auf "+Hinzufügen" um weitere Räume einzutragen'),

            Input::make('specification.sportunit')
                ->type('text')
                ->title('Was kann man bei deinem Sportverein reservieren')
                ->placeholder('Bsp: Tennisplätze, Fussballplätze, Billardtische oder Bowlingbahnen')
                ->help('Eingabe im Plural z.bsp. Dartscheiben'),

            Input::make('specification.sportnumber')
                ->type('number')
                ->min('0')
                ->title('Anzahl Einheiten von oben')
                ->placeholder('Gib die gewünschte Anzahl ein'),

            Matrix::make('specification.room')
                ->title('Räume')
                ->columns(['Raum-Name', 'Max. Personenanzahl'])
                ->fields([
                    'Raum-Name'   => Input::make('room_name')->type('text')->maxlength(50)->placeholder('Z.Bsp. Sitzungszimmer'),
                    'Max. Personenanzahl' => Input::make('room_capacity')->type('number')->min(1),
                ])
                ->help('Klick auf "+Hinzufügen" um weitere Räume einzutragen'),

            Input::make('specification.service')
                ->type('text')
                ->title('Name der Dienstleistung')
                ->placeholder('Bsp: Friseurtermin, Massagetermin, Physio')
                ->help('Was für Termine kann man bei dir reservieren?'),

            Matrix::make('specification.employee')
                ->title('Mitarbeiter und Funktion')
                ->columns(['Mitarbeiter/in', 'Funktion'])
                ->fields([
                    'Mitarbeiter'   => Input::make('employee_name')->type('text')->maxlength(50),
                    'Funktion' => Input::make('employee_function')->type('text'),
                ])
                ->help('Klick auf "+Hinzufügen" um weitere Mitarbeiter einzutragen'),
        ];
    }
}
