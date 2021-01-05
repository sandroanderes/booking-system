<?php
namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Select;

class CalendarRemoveLayout extends Rows
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
                ->title('Name')
                ->disabled(),

            Select::make('calendar.country')
                ->options([
                    'CH' => 'Schweiz',
                    'DE' => 'Deutschland',
                    'AUT' => 'Österreich',
                ])
                ->title('Land')
                ->disabled(),

            Input::make('calendar.street')
                ->type('text')
                ->title('Strasse')
                ->disabled(),

            Input::make('calendar.location')
                ->type('text')
                ->title('Ort')
                ->disabled(),

            Input::make('calendar.description')
                ->title('Beschreibung')
                ->type('text')
                ->disabled(),

            Switcher::make('calendar.public')
                ->sendTrueOrFalse()
                ->title('Öffentlicher Buecher')
                ->help('Sollen dein Buecher öffentlich einsehbar sein?')
                ->disabled(),

            Input::make('calendar.privateLink')
                ->title('Dein privater Link')
                ->readonly()
                ->disabled(),

            Select::make('calendar.template')
                ->options([
                    'none'   => 'Kein Template verwenden',
                    'gastronomy'   => 'Gastronomie - für Restaurants und Cafés',
                    'sports' => 'Sport -  für Vereine und Clubs',
                    'room' => 'Räumlichkeiten - für KMUs und Schulen',
                    'services' => 'Dienstleistungen - für Termine mit Kunden',

                ])
                ->title('Buechervorlage wählen')
                ->help('Verwende eine unserer Vorlagen')
                ->disabled(),
        ];
    }
}
