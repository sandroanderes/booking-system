<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\TD;
use App\Models\CalendarGeneral;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Illuminate\Support\Str;


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
            TD::set('name', __('Name'))
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->cantHide()
                ->render(function (CalendarGeneral $calendar) {
                    return Link::make(Str::limit($calendar->name, 20, '(...)'))
                        ->route('platform.calendar.edit', $calendar->id);
                }),
            TD::set('Description', __('Beschreibung'))
                ->render(function (CalendarGeneral $calendar) {
                    return Str::limit($calendar->description, 40, '(...)');
            }),
            TD::set('created_at', __('Created'))
                ->sort()
                ->render(function (CalendarGeneral $calendar) {
                    return $calendar->created_at->toDateTimeString();
                }),
            TD::set('Edit', __('Bearbeiten'))
            ->render(function (CalendarGeneral $calendar) {
                return Link::make()
                    ->route('platform.calendar.edit', $calendar->id)
                    ->icon('pencil');
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
