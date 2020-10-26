<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class userprofile extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Profileinstellungen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Hier können Sie ihre eigenen Profileinstellungen ändern.';

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
