<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class systemdesign extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Designeinstellungen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Hier können Sie das Design des Systems ändern.';

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
        return [];
    }
}
