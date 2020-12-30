<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;

class OpeningHoursLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [

            //Wann ist der Betrieb geöffnet?
            CheckBox::make('oh.day_monday')
                ->value(0)
                ->title('An welchen Tagen hat dein Betrieb geöffnet')
                ->placeholder('Montag')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_tuesday')
                ->value(0)
                ->placeholder('Dienstag')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_wednesday')
                ->value(0)
                ->placeholder('Mittwoch')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_thursday')
                ->value(0)
                ->placeholder('Donnerstag')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_friday')
                ->value(0)
                ->placeholder('Freitag')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_saturday')
                ->value(0)
                ->placeholder('Samstag')
                ->sendTrueOrFalse(),

            CheckBox::make('oh.day_sunday')
                ->value(0)
                ->placeholder('Sonntag')
                ->sendTrueOrFalse(),

            //Öffnungszeiten für alle Tage identisch
            RadioButtons::make('oh.repeat')
                ->options([
                    1 => 'Ja',
                    0 => 'Nein',
                ])
                ->title('Sind die Reservationszeiten an allen Tagen identisch?')
                ->value(1),

            Group::make([
                RadioButtons::make('oh.halfday_closed_general')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Können ganztags Reservationen vorgenommen werden?')
                    ->value(0),

                RadioButtons::make('oh.lunch_general')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(1),
            ]),

            Group::make([
                DateTimer::make('oh.start_general')
                    ->title('Ab wann können Reservationen vorgenommen werden?')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_general')
                    ->title('Bis wann können Reservationen vorgenommen werden?')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start')
                    ->title('Mittagspause von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            //Öffnungszeiten der einzelnen Wochentage
            //Montag
            Group::make([
                RadioButtons::make('oh.halfday_closed_monday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Montag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_monday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_monday')
                    ->title('Öffnungszeiten Montag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_monday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_monday')
                    ->title('Mittagspause Montag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_monday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Dienstag
            Group::make([
                RadioButtons::make('oh.halfday_closed_tuesday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Dienstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_tuesday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_tuesday')
                    ->title('Öffnungszeiten Dienstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_tuesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_tuesday')
                    ->title('Mittagspause Dienstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_tuesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Mittwoch
            Group::make([
                RadioButtons::make('oh.halfday_closed_wednesday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Mittwoch ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_wednesday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_wednesday')
                    ->title('Öffnungszeiten Mittwoch: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_wednesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_wednesday')
                    ->title('Mittagspause Mittwoch: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_wednesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Donnerstag
            Group::make([
                RadioButtons::make('oh.halfday_closed_thursday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Donnerstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_thursday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_thursday')
                    ->title('Öffnungszeiten Donnerstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_thursday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_thursday')
                    ->title('Mittagspause Donnerstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_thursday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Freitag
            Group::make([
                RadioButtons::make('oh.halfday_closed_friday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Freitag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_friday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_friday')
                    ->title('Öffnungszeiten Freitag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_friday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_friday')
                    ->title('Mittagspause Freitag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_friday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Samstag
            Group::make([
                RadioButtons::make('oh.halfday_closed_saturday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Samstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_saturday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_saturday')
                    ->title('Öffnungszeiten Samstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_saturday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_saturday')
                    ->title('Mittagspause Samstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_saturday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Sonntag
            Group::make([
                RadioButtons::make('oh.halfday_closed_sunday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur halbtags geöffnet',
                    ])
                    ->title('Am Sonntag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('oh.lunch_sunday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Sonntag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('oh.start_sunday')
                    ->title('Öffnungszeiten Sonntag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.end_sunday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('oh.lunch_start_sunday')
                    ->title('Mittagspause Sonntag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('oh.lunch_end_sunday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            Input::make('oh.calendar_id')
                ->value(5)
                ->hidden(),
        ];
    }
}
