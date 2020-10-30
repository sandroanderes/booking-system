<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\SettingsDelete;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;


class Delete extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Konto löschen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Konto unwiderruflich löschen';

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
            SettingsDelete::class,
        ];
    }
}
