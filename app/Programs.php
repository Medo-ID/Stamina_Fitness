<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'category', 'img', 'program'
    ];
}
