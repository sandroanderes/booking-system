<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\DateTimer;



class OpeningHoursLayout extends Rows
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

            DateTimer::make('openinghours.start')
                ->title('Reservationsstart')
                ->noCalendar()
                ->format('H:i')
                ->help('Ab welcher Uhrzeit können Reservationen getätigt werden?'),

            DateTimer::make('openinghours.end')
                ->title('Reservationsende')
                ->noCalendar()
                ->format('H:i')
                ->help('Ab welcher Uhrzeit können keine Reservationen mehr getätigt werden?'),

        ];
    }
}
