<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name', 'email', 'title','phone1', 'phone2','address'
    ];
}
