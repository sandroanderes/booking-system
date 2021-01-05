<?php

namespace App\Orchid;

use Laravel\Scout\Searchable;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemMenu;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

    }

    /**
     * @return ItemMenu[]
     */
    public function registerMainMenu(): array
    {
        return [
            ItemMenu::label('Dashboard')
                ->icon('monitor')
                ->route('platform.example'),

            ItemMenu::label('Kalenderübersicht')
                ->title('Kalender')
                ->icon('calendar')
                ->route('platform.calendar.list'),

            ItemMenu::label('Neuer Kalender hinzufügen')
                ->icon('plus')
                ->route('platform.newcalendar'),

            ItemMenu::label('Alle Einstellungen')
                ->title('Einstellungen')
                ->slug('parent-hidden-menu')
                ->childs()
                ->hideEmpty(),

            ItemMenu::label('Benutzereinstellungen')
                ->place('parent-hidden-menu')
                ->icon('user')
                ->route('platform.userscreen'),

            /* ItemMenu::label('Ansicht')
                ->place('parent-hidden-menu')
                ->icon('screen-desktop')
                ->route('platform.view'),
            */
            ItemMenu::label('Konto löschen')
                ->place('parent-hidden-menu')
                ->icon('trash')
                ->route('platform.delete'),


            ItemMenu::label('Basic Elements')
            ->title('Form controls')
            ->icon('note')
            ->route('platform.example.fields'),

        ItemMenu::label('Advanced Elements')
            ->icon('briefcase')
            ->route('platform.example.advanced'),

        ItemMenu::label('Text Editors')
            ->icon('list')
            ->route('platform.example.editors'),

        ItemMenu::label('Overview layouts')
            ->title('Layouts')
            ->icon('layers')
            ->route('platform.example.layouts'),

        ItemMenu::label('Chart tools')
            ->icon('bar-chart')
            ->route('platform.example.charts'),

        ItemMenu::label('Cards')
            ->icon('grid')
            ->route('platform.example.cards'),

        ItemMenu::label('Documentation')
            ->title('Weiteres')
            ->icon('docs')
            ->url('https://orchid.software/en/docs'),

        ];
    }

    /**
     * @return ItemMenu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            ItemMenu::label('Benutzer')
                ->route('platform.userscreen')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemMenu[]
     */
    public function registerSystemMenu(): array
    {
        return [
            ItemMenu::label(__('Access rights'))
                ->icon('lock')
                ->slug('Auth')
                ->active('platform.systems.*')
                ->permission('platform.systems.index')
                ->sort(1000),

            ItemMenu::label(__('Users'))
                ->place('Auth')
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->sort(1000)
                ->title(__('All registered users')),

            ItemMenu::label(__('Roles'))
                ->place('Auth')
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->sort(1000)
                ->title(__('A Role defines a set of tasks a user assigned the role is allowed to perform. ')),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('Systems'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return Searchable|string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}
