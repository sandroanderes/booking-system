<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Quill;


class GeneralInformationsLayout extends Rows
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

            Input::make('calendar.status')
                ->sendTrueOrFalse()
                ->hidden()
                ->value(true),

            Quill::make('calendar.description')
                ->title('Kalenderbeschreibung')
                ->toolbar(["text"])
                ->placeholder('Beschreibe deinen Kalender in 2-3 Sätzen?'),

            Switcher::make('calendar.public') 
                ->sendTrueOrFalse()
                ->title('Öffentlicher Kalender')
                ->value(true)
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

            Cropper::make('calendar.image')
                ->title('Bild hochladen')
                ->width(500)
                ->height(300)
                ->horizontal(),
            Upload::make('files')
                ->title('Upload files (wissen auch noch nicht welche)')
                ->horizontal(),

        ];
    }
}
