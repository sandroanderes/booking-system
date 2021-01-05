<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\CalendarListLayout;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

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
            $user_id = Auth::user()->id,
            'calendar' => CalendarGeneral::where('user_id', $user_id)->filters()->defaultSort('id')->paginate()
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
            Button::make('Kalenderstatus aktualisieren')
                ->icon('refresh')
                ->method('dbStatusUpdate'),

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
        Alert::info('Dein Kalender wurde erfolgreich gelöscht.');
        return redirect()->route('platform.calendar.list');
    }

    public function dbStatusUpdate(Request $request)
    {
        $calendar_id = 9;
        $calendar = CalendarGeneral::find($calendar_id);
        $calendar->status = $request->calendar_status;
        $calendar->save();
    }
}
