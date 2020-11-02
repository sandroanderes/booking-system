<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Select;

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

            Input::make('calendar.name')
                ->type('text')
                ->required()
                ->title('Name')
                ->placeholder('Gib deinem Kalender einen Namen'),

            TextArea::make('calendar.description')
                ->rows(5)
                ->required()
                ->title('Beschreibung')
                ->placeholder('Kurzbeschreibung des Kalenders')
                ->help('Worum geht es in deinem Kalender?'),

            Switcher::make('calendar.public')
                ->sendTrueOrFalse()
                ->title('Öffentlicher Kalender')
                ->value(1)
                ->help('Sollen dein Kalender öffentlich einsehbar sein?'),

            Select::make('calendar.template')
                ->options([
                    'none'   => 'Kein Template verwenden',
                    'gastronomy'   => 'Gastronomie',
                    'sportsfield' => 'Sportplätze',
                    'room' => 'Räumlichkeiten',
                    'services' => 'Dienstleistungen',

                ])
                ->title('Kalendervorlage wählen')
                ->help('Verwende eine unserer Kalendervorlagen'),


        ];
    }
}
