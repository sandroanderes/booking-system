<?php

namespace App\Orchid\Layouts\Settings;

use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;

class DeleteLayout extends Rows
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
            Input::make('user.name')
                ->title('Name')
                ->disabled(),

            Input::make('user.email')
                ->title('Email address')
                ->disabled(),
        ];     
    }
}
