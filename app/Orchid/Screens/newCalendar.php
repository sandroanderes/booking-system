<?php

namespace App\Orchid\Screens;

use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateRange;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Map;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\UTM;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class newCalendar extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Neuen Kalender erstellen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'In diesem Abschnitt können Sie einen neuen Kalender erstellen.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([

                Group::make([
                    DateTimer::make('open')
                        ->title('Opening date')
                        ->help('The opening event will take place'),

                    DateTimer::make('allowInput')
                        ->title('Allow input')
                        ->required()
                        ->allowInput(),

                    DateTimer::make('enabledTime')
                        ->title('Enabled time')
                        ->enableTime(),
                ]),

                Group::make([
                    DateTimer::make('format24hr')
                        ->title('Format 24hr')
                        ->enableTime()
                        ->format24hr(),

                    DateTimer::make('custom')
                        ->title('Custom format')
                        ->noCalendar()
                        ->format('h:i K'),

                    DateRange::make('rangeDate')
                        ->title('Range date'),
                ]),

            ])->title('Zeitangaben'),

            Layout::rows([

                Picture::make('picture')
                    ->title('Titelbild')
                    ->horizontal(),

                Cropper::make('cropper')
                    ->title('Anzeigebild')
                    ->width(500)
                    ->height(300)
                    ->horizontal(),

                Upload::make('files')
                    ->title('Zusätzliche Dateien')
                    ->horizontal(),

            ])->title('Notwendige Dateien hochladen'),

            Layout::rows([
                Map::make('place')
                    ->title('Tragen Sie ihren genauen Ort ein.')
                    ->help('Geben Sie die Koordinaten ein oder nutzen Sie die Suchfunktion'),

            ])->title('Ortsangabe'),
        ];
    }
}
