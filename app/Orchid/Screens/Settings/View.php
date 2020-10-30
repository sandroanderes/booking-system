<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\SettingsView;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;


class View extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Ansicht';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Darkemode oder Lightmode einstellen';

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
            SettingsView::class,
        ];
    }
}
