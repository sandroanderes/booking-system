<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CalendarGeneral extends Model
{
    public $table = 'calendar_general';
    use AsSource;
    protected $fillable = [
        'user_id',
        'name',
        'country',
        'street',
        'location',
        'status',
        'description',
        'public',
        'privateLink',
        'template',
        'unit',
        'image'
    ];
}
