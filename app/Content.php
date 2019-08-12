<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'course_id', 'name',
    ];

    function course()
    {
        return $this->belongsTo(Course::class);
    }
}
