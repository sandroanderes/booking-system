<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\AllBuechersLayout;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AllBuechersScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Alle erstellten Buecher';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Alle erstellten Buechers im Überblick';

    public $permission = 'platform.systems.roles';

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
            AllBuechersLayout::class
        ];
    }

    public function removeCalendar(CalendarGeneral $calendar, $calendar_id)
    {
        $calendar->where('id', $calendar_id)->delete();
        Alert::info('Der Buecher wurde erfolgreich gelöscht.');
        return redirect()->route('platform.systems.buechers');
    }

    
    public function dbStatusUpdate(Request $request)
    {
        $calendar_id = $request->calendar_id;
        $calendar = CalendarGeneral::find($calendar_id);
        $calendar->status = $request->calendar_status;
        $calendar->save();
    }
}
