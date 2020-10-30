<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\SettingsUser;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;


class User extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Benutzer';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Ändere deine Benutzerinformationen';

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
            SettingsUser::class,
        ];
    }
}
