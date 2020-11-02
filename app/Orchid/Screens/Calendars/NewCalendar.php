<?php

namespace App\Orchid\Screens\Calendars;

use App\Orchid\Layouts\Calendars\GeneralInformationsLayout;
use App\Orchid\Layouts\Calendars\SpecificationLayout;
use App\Orchid\Layouts\Calendars\OpeningHoursLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;


class NewCalendar extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Neuer Kalender hinzufügen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Erstelle einen neuen Kalender';

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
            

            Layout::accordion([
                'Schritt 1: Allgemeine Infos' => GeneralInformationsLayout::class,
                'Schritt 2: Spezifikationen' => SpecificationLayout::class,
                'Schritt 3: Informationen zum Betrieb' => OpeningHoursLayout::class,

        
            ]),

        ];
    }
}
