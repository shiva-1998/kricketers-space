<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'slots',
        'location',
        'entry_fee',
        'start_date',
        'rules',
        'logo',
        'formate',
        'registration_start',
        'registration_end'
    ];
}
