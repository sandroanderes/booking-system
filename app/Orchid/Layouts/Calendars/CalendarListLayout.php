<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\TD;
use App\Models\CalendarGeneral;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Illuminate\Support\Str;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;


class CalendarListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'calendar';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('calendar_id', __('Kalender ID'))
            ->sort()
            ->render(function (CalendarGeneral $calendar) {
                return $calendar->id;
                }),
            TD::set('calendar.name', __('Name'))
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->cantHide()
                ->render(function (CalendarGeneral $calendar) {
                    return Link::make(Str::limit($calendar->name, 20, '(...)'));
                        // ->route('platform.calendar.edit', $calendar->id);
                }),
            TD::set('calendar.description', __('Beschreibung'))
                ->render(function (CalendarGeneral $calendar) {
                    return Str::limit($calendar->description, 40, '(...)');
            }),
            TD::set('calendar.created_at', __('Created'))
                ->sort()
                ->render(function (CalendarGeneral $calendar) {
                    return $calendar->created_at->toDateTimeString();
                }),
            TD::set('calendar.status', __('Kalenderstatus'))
            ->render(function (CalendarGeneral $calendar) {
                return RadioButtons::make('calendar.status')
                ->options([
                    1 => 'Aktiv',
                    0 => 'Inaktiv',
                ])
                ->value($calendar->status)
                ->novalidate();
                }),
            TD::set('refresh_status', __('Kalender aktualisieren'))
            ->render(function () {
                return Button::make()
                ->icon('refresh')
                ->method("dbStatusUpdate")
                ->novalidate();
                }),     
            TD::set('remove', __('Löschen'))
            ->render(function (CalendarGeneral $calendar) {
                return Link::make()
                    ->route('platform.calendar.remove', $calendar->id)
                    ->icon('trash');
                }),
        ];
    }
}
