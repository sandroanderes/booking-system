<?php

namespace App\Orchid\Screens\Calendars;

use App\Models\CalendarGeneral;
use App\Models\CalendarOpeninghours;
use App\Models\CalendarSpecification;
use App\Models\SpecificationGastrotable;
use App\Orchid\Layouts\Calendars\GeneralInformationsLayout;
use App\Orchid\Layouts\Calendars\SpecificationLayout;
use App\Orchid\Layouts\Calendars\OpeningHoursLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;

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
    public $description = 'Alle Angaben können später wieder geändert werden';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(CalendarGeneral $calendar): array
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
         return [
            Button::make('Create post')
            ->icon('pencil')
            ->method('createOrUpdate')
            ->novalidate(),

            Button::make('Create OH post')
            ->icon('pencil')
            ->method('createOrUpdate_Oh')
            ->novalidate(),

            Button::make('Create specification post')
            ->icon('pencil')
            ->method('createOrUpdate_specification')
            ->novalidate(),

            Button::make('Create gastrotable post')
            ->icon('pencil')
            ->method('createOrUpdate_gastrotable')
            ->novalidate(),
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
            Layout::accordion([
                'Schritt 1: Allgemeine Einstellungen' => GeneralInformationsLayout::class,
                'Schritt 2: Öffnungszeiten' => OpeningHoursLayout::class,
                'Schritt 3: Reservations-Spezifikationen' => SpecificationLayout::class,
            ]),
            Layout::view('orchid.scripts'),
        ];
    }
    public function createOrUpdate(CalendarGeneral $calendar, Request $request)
    {
        $calendar->fill($request->get('calendar'))->save();
        Alert::info('Allgemeine Einstellungen wurden in die DB geschrieben');
    }

    public function createOrUpdate_Oh(CalendarOpeninghours $oh, Request $request)
    {
        $oh->fill($request->get('oh'))->save();
        Alert::info('You have successfully added some openinghours.');
    }

    public function createOrUpdate_specification(CalendarSpecification $specification, Request $request)
    {
        $specification->fill($request->get('specification'))->save();
        Alert::info('You have successfully added some specifications.');
    }

    public function createOrUpdate_gastrotable(SpecificationGastrotable $gastrotable, Request $request)
    {
        $gastrotable->fill($request->get('gastrotable'))->save();
        Alert::info('You have successfully added some gastrotable_shizzly.');
    }
}
