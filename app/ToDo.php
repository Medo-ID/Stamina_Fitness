<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'isImportant', 'isStarred', 'tags', 'isCompleted', 'isTrashed'
    ];
    
}
