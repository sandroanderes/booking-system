<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\User\UserEditLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UserProfileScreen extends Screen
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
     * @var User
     */
    protected $user;

    /**
     * Query data.
     *
     * @param Request $request
     *
     * @return array
     */
    public function query(Request $request): array
    {
        $this->user = $request->user();

        return [
            'user' => $this->user,
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
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            UserEditLayout::class,

            Layout::modal('password', [
                Layout::rows([
                    Password::make('old_password')
                        ->placeholder(__('Tragen Sie das aktuelle Passwort ein.'))
                        ->required()
                        ->title(__('Altes Passwort'))
                        ->help('Dies ist das Passwort, welches Sie momentan nutzen.'),

                    Password::make('password')
                        ->placeholder(__('Tragen Sie das neue Passwort ein.'))
                        ->required()
                        ->title(__('Neues Passwort')),

                    Password::make('password_confirmation')
                        ->required()
                        ->title(__('Passwort bestätigen'))
                        ->help('Ein gutes Passwort besteht aus min. 15 Zeichen oder min. 8 Zeichen, kombiniert mit Zahlen und Sonderzeichen.'),
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
            'user.email' => 'required|unique:users,email,'.$request->user()->id,
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
