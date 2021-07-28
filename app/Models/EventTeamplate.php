<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventTeamplate extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $fillable = [
        'eventName',
        'bandName',
        'startDate',
        'endDate',
        'portfolio',
        'ticketPrice',
        'status',
    ];
}
