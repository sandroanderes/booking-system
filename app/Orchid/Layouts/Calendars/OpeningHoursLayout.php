<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Group;

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
            CheckBox::make('openingday_monday')
                ->value(0)
                ->title('An welchen Tagen hat dein Betrieb geöffnet')
                ->placeholder('Montag')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_tuesday')
                ->value(0)
                ->placeholder('Dienstag')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_wednesday')
                ->value(0)
                ->placeholder('Mittwoch')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_thursday')
                ->value(0)
                ->placeholder('Donnerstag')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_friday')
                ->value(0)
                ->placeholder('Freitag')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_saturday')
                ->value(0)
                ->placeholder('Samstag')
                ->sendTrueOrFalse(),

            CheckBox::make('openingday_sunday')
                ->value(0)
                ->placeholder('Sonntag')
                ->sendTrueOrFalse()
                ->help('Wähle alle Tage an, an denen du geöffnet hast'),

            //Öffnungszeiten für alle Tage identisch
            RadioButtons::make('openinghours_repeat')
                ->options([
                    1 => 'Ja',
                    0 => 'Nein',
                ])
                ->title('Sind die Öffnungszeiten an allen Arbeitstagen identisch?')
                ->value(1),

            Group::make([
                RadioButtons::make('halfday_closed_general')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Hast du ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_general')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_general')
                    ->title('Wann öffnet dein Betrieb?')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_general')
                    ->title('Wann schliesst dein Betrieb?')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreakstart_general')
                    ->title('Mittagspause von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_general')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
       
            //Öffnungszeiten der einzelnen Wochentage
            //Montag
            Group::make([
                RadioButtons::make('halfday_closed_monday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Montag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_monday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_monday')
                    ->title('Öffnungszeiten Montag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_monday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_monday')
                    ->title('Mittagspause Montag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_monday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Dienstag
            Group::make([
                RadioButtons::make('halfday_closed_tuesday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Dienstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_tuesday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_tuesdayy')
                    ->title('Öffnungszeiten Dienstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_tuesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_tuesday')
                    ->title('Mittagspause Dienstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_tuesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Mittwoch
            Group::make([
                RadioButtons::make('halfday_closed_wednesday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Mittwoch ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_wednesday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_wednesday')
                    ->title('Öffnungszeiten Mittwoch: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_wednesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_wednesday')
                    ->title('Mittagspause Mittwoch: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_wednesday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Donnerstag
            Group::make([
                RadioButtons::make('halfday_closed_thursday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Donnerstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_thursday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_thursday')
                    ->title('Öffnungszeiten Donnerstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_thursday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_thursday')
                    ->title('Mittagspause Donnerstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_thursday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Freitag
            Group::make([
                RadioButtons::make('halfday_closed_friday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Freitag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_friday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_friday')
                    ->title('Öffnungszeiten Freitag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_friday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_friday')
                    ->title('Mittagspause Freitag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_friday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Samstag
            Group::make([
                RadioButtons::make('halfday_closed_saturday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Samstag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_saturday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Mittag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_saturday')
                    ->title('Öffnungszeiten Samstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_saturday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_saturday')
                    ->title('Mittagspause Samstag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_saturday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),
            //Sonntag
            Group::make([
                RadioButtons::make('halfday_closed_sunday')
                    ->options([
                        0 => 'Ja',
                        1 => 'Nur morgens geöffnet',
                        2 => 'Nur nachmittags geöffnet',
                    ])
                    ->title('Am Sonntag ganztags geöffnet?')
                    ->value(0),

                RadioButtons::make('lunchbreak_sunday')
                    ->options([
                        1 => 'Ja',
                        0 => 'Nein',
                    ])
                    ->title('Wird dein Betrieb über Sonntag geschlossen?')
                    ->value(0),
            ]),

            Group::make([
                DateTimer::make('openinghours_sunday')
                    ->title('Öffnungszeiten Sonntag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('closinghours_sunday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),

            Group::make([
                DateTimer::make('lunchbreackstart_sunday')
                    ->title('Mittagspause Sonntag: Von...')
                    ->noCalendar()
                    ->format('H:i'),

                DateTimer::make('lunchbreakend_sunday')
                    ->title('... bis')
                    ->noCalendar()
                    ->format('H:i'),
            ]),


        ];
    }
}
