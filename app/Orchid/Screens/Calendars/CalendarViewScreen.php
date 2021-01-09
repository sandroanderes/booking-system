<?php

namespace App\Orchid\Screens\Calendars;

use Orchid\Screen\Screen;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\Calendars\CalendarViewLayout;
use Orchid\Screen\Actions\Link;

class CalendarViewScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Dein Buecher';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Leider kann dein Buecher noch nicht bearbeitet werden. Du kannst ihn aber löschen und einen Neuen erstellen.';


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
            Link::make('Back')
                ->icon('action-undo')
                ->route('platform.calendar.list')
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
            CalendarViewLayout::class
        ];
    }
}
