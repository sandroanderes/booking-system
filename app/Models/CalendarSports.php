<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;

class CalendarSports extends Model
{
    public $table = 'sports';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'name',
        'number', 
    ];
}
