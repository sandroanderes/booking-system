<?php

namespace App\Orchid\Layouts\Settings;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;

class PasswordLayout extends Rows
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
            Input::make('name')
                ->title('Full Name:')
                ->placeholder('Enter full name')
                ->required()
                ->help('Please enter your full name'),

            Input::make('email')
                ->title('Email address')
                ->placeholder('Email address')
                ->help("We'll never share your email with anyone else.")
                ->popover('Tooltip - hint that user opens himself.'),

            Password::make('password')
                ->title('Password')
                ->placeholder('Password'),

            Label::make('static')
                ->title('Static:')
                ->value('email@example.com'),

            Select::make('select')
                ->title('Select')
                ->options([1, 2]),

            CheckBox::make('checkbox')
                ->title('Checkbox')
                ->placeholder('Remember me'),

            Radio::make('radio')
                ->placeholder('Yes')
                ->value(1)
                ->title('Radio'),

            Radio::make('radio')
                ->placeholder('No')
                ->value(0),

            TextArea::make('textarea')
                ->title('Example textarea')
                ->rows(6),

        ];
    }
}
