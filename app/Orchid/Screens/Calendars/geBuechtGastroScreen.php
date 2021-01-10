<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\geBuechtGastroLayout;
use App\Models\geBuechtGastro;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;

class geBuechtGastroScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Deine Reservationen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Eine Übersicht der Buchungen auf deinem Buecher.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query($calendar_id): array
    {
        return [
            'geBuecht' => geBuechtGastro::where('calendar_id', $calendar_id)->paginate()
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
            geBuechtGastroLayout::class
        ];
    }
}
