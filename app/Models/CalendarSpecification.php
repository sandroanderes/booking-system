<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CalendarSpecification extends Model
{
    public $table = 'calendar_specifications';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'format',
        'duration_fixed',
        'duration_all',
        'timeunit',
        'duration_min_min',
        'duration_min_h',
        'duration_min_d',
        'duration_max_min',
        'duration_max_h',
        'duration_max_d',
        'gastrotable',
        'gastrotable_number',
        'sportunit',
        'sportnumber',
        'room_name',
        'room_capacity',
        'room_assets',
        'service',
        'employee_name',
        'employee_function',       
    ];
}
