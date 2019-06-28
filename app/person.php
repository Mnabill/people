<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
     protected $fillable = [
        'frist_name',
        'last_name',
        'email',
        'phone',
        'city',
    ];
}
