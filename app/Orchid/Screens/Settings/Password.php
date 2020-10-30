<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\SettingsPassword;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;


class Password extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Passwort ändern';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Verwende ein sichers Passwort';

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
            SettingsPassword::class,
        ];
    }
}
