<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CalendarOpeninghours extends Model
{
    public $table = 'calendar_openinghours';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'day_monday',
        'day_tuesday',
        'day_wednesday',
        'day_thursday',
        'day_friday',
        'day_saturday',
        'day_sunday',
        'repeat',
        'halfday_closed_general',
        'lunch_general',
        'start_general',
        'end_general',
        'lunch_start',
        'lunch_end',
        'halfday_closed_monday',
        'lunch_monday',
        'start_monday',
        'end_monday',
        'lunch_start_monday',
        'lunch_end_monday',
        'halfday_closed_tuesday',
        'lunch_tuesday',
        'start_tuesday',
        'end_tuesday',
        'lunch_start_tuesday',
        'lunch_end_tuesday',
        'halfday_closed_wednesday',
        'lunch_wednesday',
        'start_wednesday',
        'end_wednesday',
        'lunch_start_wednesday',
        'lunch_end_wednesday',
        'halfday_closed_thursday',
        'lunch_thursday',
        'lunch_start_thursday',
        'lunch_end_thursday',
        'halfday_closed_friday',
        'lunch_friday',
        'start_friday',
        'end_friday',
        'halfday_closed_saturday',
        'lunch_saturday',
        'start_saturday',
        'end_saturday',
        'lunch_start_saturday',
        'lunch_end_saturday',
        'halfday_closed_sunday',
        'lunch_sunday',
        'start_sunday',
        'end_sunday',
        'lunch_start_sunday',
        'lunch_end_sunday',
    ];
}
