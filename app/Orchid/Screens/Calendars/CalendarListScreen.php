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
use Orchid\Screen\Fields\Input;

class CalendarListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Deine Buecher';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Liste deiner Buecher';

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
            Link::make('Neuer Buecher hinzufügen')
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
        Alert::info('Dein Buecher wurde erfolgreich gelöscht.');
        return redirect()->route('platform.calendar.list');
    }

    
    public function dbStatusUpdate(Request $request)
    {
        $calendar_id = $request->calendar_id;
        $calendar = CalendarGeneral::find($calendar_id);
        $calendar->status = $request->calendar_status;
        $calendar->save();
    }
}
