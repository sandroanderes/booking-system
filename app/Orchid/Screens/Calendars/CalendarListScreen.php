<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\CalendarListLayout;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class CalendarListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Deine Kalender';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Liste deiner Kalender';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'calendar' => CalendarGeneral::filters()->defaultSort('id')->paginate()
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
            Link::make('Neuer Kalender hinzufügen')
                ->icon('plus')
                ->route('platform.newcalendar')
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
            CalendarListLayout::class
        ];
    }

    public function removeCalendar(CalendarGeneral $calendar, $calendar_id)
    {
        $calendar->where('id', $calendar_id)->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.calendar.list');
    }
}
