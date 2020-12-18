<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;

class CalendarRooms extends Model
{
    public $table = 'rooms';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'name',
        'capacity',
        'assets', 
    ];
}
