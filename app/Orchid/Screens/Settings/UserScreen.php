<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\UserLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Password;
use Orchid\Support\Facades\Toast;
use Illuminate\Support\Facades\Auth;

class UserScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Persönliches Profil';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Allgemeine Profileinstellungen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'user.name' => Auth::user()->name,
            'user.email' => Auth::user()->email,
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            ModalToggle::make(__('Passwort ändern'))
                ->icon('lock-open')
                ->method('changePassword')
                ->modal('password'),
            Button::make(__('Speichern'))
                ->icon('check')
                ->method('save'),
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
            UserLayout::class,

            Layout::modal('password', [
                Layout::rows([
                    Password::make('old_password')
                        ->placeholder(__('Aktuelles Passwort eintragen'))
                        ->required()
                        ->title(__('Altes Passwort'))
                        ->help('Dies ist das Passwort, welches Sie momentan nutzen.'),

                    Password::make('password')
                        ->placeholder(__('Neues Passwort eintragen'))
                        ->required()
                        ->title(__('Neues Passwort')),

                    Password::make('password_confirmation')
                        ->required()
                        ->title(__('Passwort bestätigen'))
                        ->help('Ein gutes Passwort besteht aus min. 8 Zeichen, kombiniert mit Zahlen und Sonderzeichen.'),
                ]),
            ])
                ->title(__('Passwort ändern'))
                ->applyButton('Passwort aktualisieren'),
        ];
    }
    /**
     * @param Request $request
     */
    public function save(Request $request)
    {
        $request->validate([
            'user.name'  => 'required|string',
            'user.email' => 'required|unique:users,email,' . $request->user()->id,
        ]);

        $request->user()
            ->fill($request->get('user')) 
            ->save();

        Toast::info(__('Profil aktualisiert.'));
    }
    /**
     * @param Request $request
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|password:web',
            'password'     => 'required|confirmed',
        ]);

        tap($request->user(), function ($user) use ($request) {
            $user->password = Hash::make($request->get('password'));
        })->save();

        Toast::info(__('Passwort geändert.'));
    }
}
