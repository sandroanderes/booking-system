<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;

class CalendarGeneral extends Model
{
    public $table = 'calendar_general';
    use AsSource, Attachable, Filterable;
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

    protected $allowedSorts = [
        'id',
        'name',
        'created_at'
    ];

    protected $allowedFilters = [
        'name',
    ];
}
