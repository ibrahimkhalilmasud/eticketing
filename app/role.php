<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
