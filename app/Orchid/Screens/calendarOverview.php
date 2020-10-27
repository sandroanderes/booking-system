<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Link;

// DB
use App\Models\Calendar;

class CalendarOverview extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Übersicht';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Hier sehen Sie eine Übersicht Ihrer Kalender';

    /**
     * Query data.
     *
     * @return array
     */

    public $exists = false;

    public function query(): array
    {
        return [
            
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Neuer Kalender erstellen')
                ->icon('pencil')
                ->route('platform.CalendarNew')
        ];
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
                Relation::make('calendar.calendar_name')
                ->title('Kalender auswählen')
                ->fromModel(Calendar::class, 'calendar_name'),

                Quill::make('post.body')
                    ->title('Main text')
            ]),
            
        ];
    }
}
