<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarUser extends Model
{
    use HasFactory;
    // sonst --> use AsSource;

    protected $fillable = [
        'firstname',
        'lastname',
        'private_email',
        'public_email',
        'public_phoneNr',
        'company_name',
        'branch',
        'website_url'
    ];
}
