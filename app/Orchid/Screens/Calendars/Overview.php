<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\CalendarListLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Models\CalendarGeneral;
use Orchid\Screen\Actions\Link;


class Overview extends Screen
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
    public $description = 'All deine Kalender im Überblick';
    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return ['calendar' => CalendarGeneral::paginate()];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
            ->icon('pencil')
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

}
