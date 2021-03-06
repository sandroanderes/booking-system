<?php

declare(strict_types=1);

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Calendar Views
use App\Orchid\Screens\Calendars\NewCalendar;
use App\Orchid\Screens\Calendars\EditCalendar;
use App\Orchid\Screens\Calendars\CalendarListScreen;
use App\Orchid\Screens\Calendars\AllBuechersScreen;
use App\Orchid\Screens\Calendars\CalendarRemoveScreen;
use App\Orchid\Screens\Calendars\CalendarViewScreen;
use App\Orchid\Screens\Calendars\geBuechtGastroScreen;

//Settings Views
use App\Orchid\Screens\Settings\Delete;
use App\Orchid\Screens\Settings\UserScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('userscreen', UserScreen::class)
    ->name('platform.userscreen')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.userscreen'));
    });

// Platform > System > Users
Route::screen('systems/user/{users}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(function (Trail $trail, $user) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Edit'), route('platform.systems.users.edit', $user));
    });

// Platform > System > Users > User
Route::screen('systems/user/list', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
/*Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    }); */

// Platform > Calendars > CalendarListScreen
/* Route::screen('your-buechers', CalendarListScreen::class)
    ->name('platform.calendar.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Deine Kalender'));
    }); */

// Platform > Calendars > CalendarListScreen
Route::screen('systems/buecher/list', AllBuechersScreen::class)
    ->name('platform.systems.buechers')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.index')
            ->push(__('Buechers'), route('platform.systems.buechers'));
    }); 

// Platform > Calendars > AllBuechers
Route::screen('buecher/create', NewCalendar::class)
    ->name('platform.newcalendar')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Neuer Kalender'));
    });

// Platform > Settings > User
Route::screen('account/settings', UserScreen::class)
    ->name('platform.userscreen')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Benutzereinstellungen'));
    });

/* Platform > Settings > Password
Route::screen('password', Password::class)
    ->name('platform.password')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Password ändern'));
    }); */

// Platform > Settings > View
/* Route::screen('view', View::class)
    ->name('platform.view')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Ansicht ändern'));
    }); */

// Platform > Settings > Delete
Route::screen('account/remove', Delete::class)
    ->name('platform.delete')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Konto löschen'));
    });

// Calendar Edit Screen
Route::screen('buecher/remove/{calendar_id}', CalendarRemoveScreen::class)
    ->name('platform.calendar.remove');

Route::screen('buecher/edit/{calendar_id?}', EditCalendar::class)
->name('platform.calendar.edit');

Route::screen('buecher/view/{calendar_id}', CalendarViewScreen::class)
    ->name('platform.calendar.view');

Route::screen('buecher/booked/gastro/{calendar_id}', geBuechtGastroScreen::class)
    ->name("platform.booked.gastronomy.view");

    Route::screen('buecher/booked/room/{calendar_id}', CalendarViewScreen::class)
    ->name("platform.booked.room.view");

    Route::screen('buecher/booked/sports/{calendar_id}', CalendarViewScreen::class)
    ->name('platform.booked.sports.view');

    Route::screen('buecher/booked/services/{calendar_id}', CalendarViewScreen::class)
    ->name('platform.booked.services.view');

    Route::screen('buecher/booked/none/{calendar_id}', CalendarViewScreen::class)
    ->name('platform.booked.none.view');

// Calendar List Screen
Route::screen('buecher/list', CalendarListScreen::class)
    ->name('platform.calendar.list');

// Example...
/* Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Example screen'));
    }); */




/*
Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
*/