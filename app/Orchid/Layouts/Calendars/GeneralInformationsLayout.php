<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Quill;
use Illuminate\Support\Facades\Auth;

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
                ->placeholder('Gib deinem Buecher einen Namen')
                ->popover('Gib deinem Buecher einen Namen. Unter diesem wird er auf der Website freigeschaltet.'),

            Select::make('calendar.country')
                ->options([
                    'Schweiz' => 'Schweiz',
                    'Deutschland' => 'Deutschland',
                    'Österreich' => 'Österreich',
                ])
                ->value(1)
                ->required()
                ->title('Land')
                ->help('Wo befindet sich dein Bucher. (Verein, Restaurant, Raum, Dienstleiter, usw.)'),

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
                ->hidden()
                ->value(1),

            Quill::make('calendar.description')
                ->title('Kurzbeschreibung')
                ->toolbar(["text"])
                ->required()
                ->placeholder('Beschreibe kurz deine Organisation und erklär, was der Kunde bei dir reservieren kann')
                ->popover('Die Beschreibung wird zusammen mit deinem Buecher auf der Website dargestellt.'),

            Switcher::make('calendar.public')
                ->sendTrueOrFalse()
                ->title('Öffentlicher Buecher')
                ->value(true)
                ->help('Ist der Schalter auf privat gesetzt, können Kunden nur mit dem nachfolgenden Link auf deinen Buecher zugreifen.')
                ->popover('Öffentliche Buecher sind auf der Website frei zugänglich. Private hingegen können nur über den privaten Link aufgerufen werden. Du findest diesen Link auch in der Buecher Übersicht.'),

            Input::make('calendar.privateLink')
                ->title('Dein privater Link')
                ->readonly()
                ->popover('Kopiere diesen Link oder und sende ihn jedem, der Zugriff auf deinen Buecher haben soll.'),

            Input::make('calendar.buecherKey')
            ->hidden(),

            Select::make('calendar.template')
                ->options([
                    'none'   => 'Kein Template verwenden',
                    'gastronomy'   => 'Gastronomie - für Restaurants und Cafés',
                    'sports' => 'Sport -  für Vereine und Clubs',
                    'rooms' => 'Räumlichkeiten - für KMUs und Schulen',
                    'services' => 'Dienstleistungen - für Termine mit Kunden',

                ])
                ->title('Buechervorlage wählen')
                ->help('Verwende eine unserer Vorlagen'),

            Input::make('calendar.unit')
                ->type('text')
                ->title('Reservationsobjekt')
                ->required()
                ->help('Was kann in diesem Buecher reserviert werden?')
                ->popover('Hier kannst du z.B. auch eine Fotokamera usw. für andere zur Verfügung stellen.'),

            Cropper::make('calendar.image')
                ->title('Bild hochladen')
                ->width(500)
                ->required()
                ->height(300)
                ->targetRelativeUrl()
                ->horizontal()
                ->popover('Lade ein aussagekräfiges Foto für deinen Buecher hoch. Dieses wird als Anzeigebild für deinen Buecher verwendet.'),

            Input::make('calendar.user_id')
                ->value(Auth::id())
                ->hidden(),
        ];
    }
}
