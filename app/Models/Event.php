<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model 
{

    protected $table = 'events';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name',
        'event_venue',
        'event_date'
    ];
}
