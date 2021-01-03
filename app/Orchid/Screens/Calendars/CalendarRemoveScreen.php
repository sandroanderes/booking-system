<?php

namespace App\Orchid\Screens\Calendars;

use Orchid\Screen\Screen;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Alert;
use App\Orchid\Layouts\Calendars\CalendarRemoveLayout;

class CalendarRemoveScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Kalender Löschen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Sie sind dabei einen Kalender zu löschen.
    Wenn Sie diesen Kalender löschen, kann dies nicht wieder rückgängig gemacht werden.';


    /**
     * Query data.
     *
     * @return array
     */
    public function query(CalendarGeneral $calendar): array
    {
        return [
            'calendar' => $calendar,
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
            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
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
            CalendarRemoveLayout::class
        ];
    }


    public function remove(CalendarGeneral $calendar)
    {
        $calendar->delete();
        Alert::success('Der Kalender wurde erfolgreich gelöscht');
        return redirect()->route('platform.calendar.list');
    }
}
