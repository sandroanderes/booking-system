<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;

class NewCalendarLayout extends Rows
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

            Input::make('calendar.name')
                ->type('text')
                ->required()
                ->title('Name')
                ->placeholder('So soll dein neuer Kalender heissen'),

            TextArea::make('calendar.description')
                ->rows(5)
                ->required()
                ->title('Beschreibung')
                ->placeholder('Kurzbeschreibung des Kalenders')
                ->help('Dieser Text werden deine Nutzer sehen'),

            CheckBox::make('calendar.public')
                ->value(1)
                ->title('Öffentlicher Kalender')
                ->help('Sollen alle Nutzer Einblick in den Kalender haben?')
                ->sendTrueOrFalse(),

        ];
    }
}
