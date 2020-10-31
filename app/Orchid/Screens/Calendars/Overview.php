<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\OverviewLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

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
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::tabs([
                'Example Tab 1' => Layout::view('platform::dummy.block'),
                'Example Tab 2' => Layout::view('platform::dummy.block'),
                'Example Tab 3' => Layout::view('platform::dummy.block'),
            ]),
            OverviewLayout::class,
        ];
    }
}
