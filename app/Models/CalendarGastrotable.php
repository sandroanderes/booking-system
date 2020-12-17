<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CalendarGastrotable extends Model
{
    public $table = 'gastrotable';
    use AsSource;
    protected $fillable = [
        'calendar_id',
        'gastrotable',
        'gastrotable_number', 
    ];
}