<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'photo', // أضف هذا السطر

        'name',
        'nationality',
        'job_title',
        'phone',
        'salary',
        'passport_number',
        'passport_expiry',
        'residence_number',
        'residence_expiry',
        'first_arrival',
        'last_travel',
        'return_date',
        'vacation_start',
        'vacation_end',
        'notes',
    ];
}
