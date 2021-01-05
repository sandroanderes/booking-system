<?php

namespace App\Orchid\Screens\Settings;

use App\Orchid\Layouts\Settings\DeleteLayout;
use App\Orchid\Layouts\Settings\DeleteListLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\CalendarGeneral;
use App\Models\User;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;


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
        return [
            'user.name' => Auth::user()->name,
            'user.email' => Auth::user()->email,
            $userId = Auth::user()->id,

            'calendar' => CalendarGeneral::where('user_id', $userId)->filters()->defaultSort('id')->paginate(),
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
            ModalToggle::make('Benutzerkonto löschen')
            ->modal('removeUser')
            ->method('removeAccount')
            ->icon('trash'),
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
            Layout::tabs([
                'Benutzerkonto' => DeleteLayout::class,
                'Erstellte Buecher' => DeleteListLayout::class,
            ]),
            Layout::modal('removeUser', [
                Layout::rows([
                    Input::make('email')
                        ->title('E-Mail')
                        ->placeholder('beispiel@mail.ch')
                        ->help('Gib deine E-Mailadresse ein.')
                        ->required(),
                    Input::make('password')
                        ->title('Passwort')
                        ->placeholder('password12345')
                        ->help('Gib dein Passwort ein.')
                        ->type('password')
                        ->required(),
                ]),
            ])->title('Dein Benutzerkonto und alle dazugehörigen Buecher löschen'),
    ];

    }
    public function removeAccount(CalendarGeneral $calendar, User $user, Request $request)
    {
        $user['id'] = Auth::user()->id;
        $user['email'] = Auth::user()->email;
        $user['password'] = Auth::user()->password;

        $email = $request->input('email');
        $password = $request->input('password');

        if ($user['email'] == $email) {
            $user = User::where('email', '=', $email)->first();
            if ($user) {
                $passwordCheck = Hash::check($password, $user['password']);
                if ($passwordCheck){
                    $calendar->where('user_id', $user['id'])->delete();
                    $user->where('id', $user['id'])->delete();
                } else{
                    Alert::error("<strong>Benutzerkonto nicht gelöscht:</strong><br>E-Mail oder Passwort ist falsch");
                }
            } else {
                Alert::error("<strong>Benutzerkonto nicht gelöscht:</strong><br>E-Mail oder Passwort ist falsch");
            }
        }else {
            Alert::error("<strong>Benutzerkonto nicht gelöscht:</strong><br>E-Mail oder Passwort ist falsch");
        }
    }
}
