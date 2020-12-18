<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;

class CalendarServiceEmployees extends Model
{
    public $table = 'service_employees';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'employee_name',
        'employee_function', 
    ];
}
