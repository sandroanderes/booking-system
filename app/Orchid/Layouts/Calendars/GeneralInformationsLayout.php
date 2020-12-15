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

            Select::make('calendar.country')
                ->options([
                    'CH' => 'Schweiz',
                    'DE' => 'Deutschland',
                    'AUT' => 'Österreich',
                ])
                ->value(1)
                ->required()
                ->title('Land'),

            Input::make('calendar.street')
                ->type('text')
                ->required()
                ->title('Strasse')
                ->placeholder('Musterstrasse 10'),

            Input::make('calendar.location')
                ->type('text')
                ->required()
                ->title('Ort')
                ->placeholder('Musterhausen'),

            Input::make('calendar.status')
                ->sendTrueOrFalse()
                ->hidden()
                ->value(true),

            Quill::make('calendar.description')
                ->title('Kalenderbeschreibung')
                ->toolbar(["text"])
                ->required()
                ->placeholder('Beschreibe deinen Kalender in 2-3 Sätzen?'),

            Switcher::make('calendar.public')
                ->sendTrueOrFalse()
                ->title('Öffentlicher Kalender')
                ->value(false)
                ->help('Sollen dein Kalender öffentlich einsehbar sein?'),

            Input::make('calendar.privateLink')
                ->title('Dein privater Link')
                ->readonly(),

            Select::make('calendar.template')
                ->options([
                    'none'   => 'Kein Template verwenden',
                    'gastronomy'   => 'Gastronomie - für Restaurants und Cafés',
                    'sports' => 'Sport -  für Vereine und Clubs',
                    'room' => 'Räumlichkeiten - für KMUs und Schulen',
                    'services' => 'Dienstleistungen - für Termine mit Kunden',

                ])
                ->title('Kalendervorlage wählen')
                ->help('Verwende eine unserer Kalendervorlagen'),

            Input::make('calendar.unit')
                ->type('text')
                ->title('Reservationsobjekt')
                ->required()
                ->help('Was kann in diesem Kalender reserviert werden?'),

            Cropper::make('calendar.image')
                ->title('Bild hochladen')
                ->width(500)
                ->height(300)
                ->targetRelativeUrl()
                ->horizontal(),

            Input::make('calendar.user_id')
                ->value(1)
                ->hidden(),
        ];
    }
}
