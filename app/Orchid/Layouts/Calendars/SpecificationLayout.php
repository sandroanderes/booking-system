<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Switcher;

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

            Select::make('specification.timeunit')
                ->options([
                    'minunte'   => 'Minuten',
                    'hour' => 'Stunden',
                    'day' => 'Tage',
                ])
                ->title('Reservationsdauer in:')
                ->value('hour')
                ->help('Was ist die standardmässige Zeiteinheit der Reservation?'),


            Switcher::make('specification.duration_fixed')
                ->sendTrueOrFalse()
                ->title('Fixes Reservationsintervall')
                ->value(1)
                ->help('Dauert eine Reservationseinheit bei dir immer gleich lang?'),

            Select::make('specification.duration_interval')
                ->options([
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
                ->title('Minimale Reservationsdauer in Tagen'),

            Select::make('specification.duration_max')
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

            Select::make('specification.duration_max')
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
            Select::make('specification.duration_max')
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

            Select::make('specification.duration_min')
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

            Select::make('specification.duration_min')
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
            Select::make('specification.duration_min')
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


        ];
    }
}
