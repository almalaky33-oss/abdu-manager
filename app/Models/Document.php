<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name',
        'type',
        'issue_date',
        'expiry_date',
        'reminder_days',
        'file',
        'notes',
    ];
}
