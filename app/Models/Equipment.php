<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model 
{

    protected $table = 'equipments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eq_name',
        'eq_price',
        'eq_type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
