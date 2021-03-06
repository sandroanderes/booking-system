<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;

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
                ->title('Format wählen')
                ->value('weekly')
                ->help('In welchem Format soll dein Buecher standardmässig angezeigt werden?'),

            Group::make([
                Switcher::make('specification.duration_fixed')
                    ->sendTrueOrFalse()
                    ->title('Fixes Reservationsintervall')
                    ->value(true)
                    ->help('Falls Reservationen immer gleich lang dauern?'),

                Select::make('specification.duration_all')
                    ->title('Fixe Reservationsdauer')
                    ->options([
                        '0' => 'Fixe Reservationsdauer wählen:',
                        '0.166' => '10 Minuten',
                        '0.25' => '15 Minuten',
                        '0.333' => '20 Minuten',
                        '0.5' => '30 Minuten',
                        '0.666' => '40 Minuten',
                        '0.75' => '45 Minuten',
                        '0.833' => '50 Minuten',
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
                    ->value('0')
                    ->required(),
            ]),

            RadioButtons::make('specification.timeunit')
                ->title('Reservationsdauer in')
                ->options([
                    0 => 'Minuten',
                    1 => 'Stunden',
                    2 => 'Tage',
                ])
                ->help('Welches Zeitformat macht für deine Art von Reservationen am meisten Sinn?')
                ->required(),

            Select::make('specification.duration_min_min')
                ->options([
                    '0' => 'Minimale Reservationsdauer wählen:',
                    '0.166' => '10 Minuten',
                    '0.25' => '15 Minuten',
                    '0.333' => '20 Minuten',
                    '0.5' => '30 Minuten',
                    '0.666' => '40 Minuten',
                    '0.75' => '45 Minuten',
                    '0.833' => '50 Minuten',
                    '1' => '1 Stunde',
                    '1.5' => '1.5 Stunden',
                    '2' => '2 Stunden'
                ])
                ->title('Minimale Reservationsdauer in Minuten')
                ->required(),

            Select::make('specification.duration_min_h')
                ->options([
                    '0' => 'Minimale Reservationsdauer wählen:',
                    '0.25' => 'Viertel Stunde',
                    '0.5' => 'Halbe Stunde',
                    '0.75' => 'Dreiviertel Stunde',
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
                ->title('Minimale Reservationsdauer in Stunden')
                ->required(),
            Select::make('specification.duration_min_d')
                ->options([
                    '0' => 'Minimale Reservationsdauer wählen:',
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
                ->title('Minimale Reservationsdauer in Tagen')
                ->required(),

            Select::make('specification.duration_max_min')
                ->options([
                    '0' => 'Maximale Reservationsdauer wählen:',
                    '0.166' => '10 Minuten',
                    '0.25' => '15 Minuten',
                    '0.333' => '20 Minuten',
                    '0.5' => '30 Minuten',
                    '0.666' => '40 Minuten',
                    '0.75' => '45 Minuten',
                    '0.833' => '50 Minuten',
                ])
                ->title('Maximale Reservationsdauer in Minuten')
                ->required(),

            Select::make('specification.duration_max_h')
                ->options([
                    '0' => 'Maximale Reservationsdauer wählen:',
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
                ->title('Maximale Reservationsdauer in Stunden')
                ->required(),
            Select::make('specification.duration_max_d')
                ->options([
                    '0' => 'Maximale Reservationsdauer wählen:',
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
                ->title('Maximale Reservationsdauer in Tagen')
                ->required(),

            Matrix::make('gastrotable')
                ->title('Anzahl Tische')
                ->columns(['Tischgrösse', 'Verfügbare Tische'])
                ->maxRows(10)
                ->value(1)
                ->fields([
                    'Tischgrösse' => Select::make('size')->type('text')->options([
                        '1' => '1er-Tisch',
                        '2' => '2er-Tisch',
                        '4' => '4er-Tisch',
                        '5' => '5er-Tisch',
                        '6' => '6er-Tisch',
                        '7' => '7er-Tisch',
                        '8' => '8er-Tisch'
                    ]),
                    'Verfügbare Tische' => Input::make('count')->type('number')->min(1),
                ]),

            Input::make('sports.name')
                ->type('text')
                ->title('Was kann man bei deinem Sportverein reservieren')
                ->placeholder('Bsp: Tennisplätze, Fussballplätze, Billardtische oder Bowlingbahnen')
                ->required(),

            Input::make('sports.number')
                ->type('number')
                ->min('0')
                ->title('Anzahl')
                ->placeholder('Gib die gewünschte Anzahl ein')
                ->required(),

            Matrix::make('rooms')
                ->title('Räume')
                ->value(1)
                ->columns(['Raum-Name', 'Max. Personenanzahl', 'Ausstattung'])
                ->fields([
                    'Raum-Name'   => Input::make('name')->type('text')->maxlength(50)->placeholder('Z.Bsp. Sitzungszimmer'),
                    'Max. Personenanzahl' => Input::make('capacity')->type('number')->min(1),
                    'Ausstattung'   => Input::make('assets')->type('text')->maxlength(100)->placeholder('z.Bsp. Beamer, Flipchart, TV'),
                ])

                ->help('Klick auf "+Hinzufügen" um weitere Räume einzutragen'),

            Input::make('service_employees.service_name')
                ->type('text')
                ->title('Name der Dienstleistung')
                ->placeholder('Bsp: Friseurtermin, Massagetermin, Physio')
                ->help('Was für Termine kann man bei dir reservieren?')
                ->required(),

            Matrix::make('service_employees')
                ->title('Mitarbeiter und Funktion')
                ->value(1)
                ->columns(['Name', 'Funktion'])
                ->fields([
                    'Name'   => Input::make('employee')->type('text')->maxlength(50),
                    'Funktion'   => Input::make('employee_function')->type('text'),
                ])

                ->help('Klick auf "+Hinzufügen" um weitere Mitarbeiter einzutragen'),
            Group::make([
                Button::make('Buecher Speichern')
                    ->icon('database')
                    ->method('db_upload')
                    ->novalidate()
                    ->right(),

                Button::make('Abbrechen')
                    ->icon('close')
                    ->method('close')
                    ->novalidate()
                    ->left(),
            ])
        ];
    }
}
