<?php

namespace App\Orchid\Layouts\Settings;

use Orchid\Screen\TD;
use App\Models\CalendarGeneral;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Illuminate\Support\Str;
use Orchid\Screen\Fields\RadioButtons;


class DeleteListLayout extends Table
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
            TD::set('calendar_name', __('Name'))
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->cantHide()
                ->render(function (CalendarGeneral $calendar) {
                    return Str::limit($calendar->name, 20, '(...)');
                        // ->route('platform.calendar.edit', $calendar->id);
                }),
            TD::set('calendar_description', __('Beschreibung'))
                ->render(function (CalendarGeneral $calendar) {
                    return Str::limit($calendar->description, 40, '(...)');
            }),
            TD::set('calendar_status', __('Kalenderstatus'))
            ->render(function (CalendarGeneral $calendar) {
                return RadioButtons::make('calendar_status')
                ->options([
                    1 => 'Aktiv',
                    0 => 'Inaktiv',
                ])
                ->value($calendar->status)
                ->novalidate()
                ->disabled();
                }), 
            TD::set('calendar_created_at', __('Created'))
            ->sort()
            ->render(function (CalendarGeneral $calendar) {
                return $calendar->created_at->format('Y-m-d');
            }),
            TD::set('calendar_updated_at', __('Updated'))
            ->sort()
            ->render(function (CalendarGeneral $calendar) {
                return $calendar->updated_at->format('Y-m-d');
            }),  
        ];
    }
}
