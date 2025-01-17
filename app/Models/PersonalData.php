<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonalData extends Model
{
    use HasFactory;
    protected $filable = [
        'first_name',
        'last_name',
        'range',
        'address',
        'city',
        'postal_code',
        'state',
        'country',
        'phone',
        'prefix',
        'email',
        'website',
        'linkedin'
    ];
}
