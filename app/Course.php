<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'description','status'
    ];

    function contents(){
        return $this->hasMany(Content::class);
    }
}
