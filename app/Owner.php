<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'date',
        'fiscal_code',
        'phone',
        'email'
    ];
}
