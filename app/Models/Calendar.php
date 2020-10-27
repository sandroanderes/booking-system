<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    // sonst --> use AsSource;

    protected $fillable = [
        'calendar_name',
        'description',
        'calendar_format',
        'period_from',
        'period_until',
        'min_duration',
        'max_duration',
        'fixed_duration',
        'allday_reservation',
        'private_link'
    ];
}
