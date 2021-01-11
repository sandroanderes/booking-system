<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class geBuechtGastro extends Model
{
    public $table = 'reservation_table';
    use AsSource;

    protected $fillable = [
        'calendar_id',
        'firstname',
        'name',
        'email',
        'tel',
        'reservation_duration',
        'timeslot',
        'remarks',
        'size'
    ];
}
