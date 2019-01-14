<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    public $table = 'security';

    public $fillable =
    [
        'user_id',
        'activityLog',
        'passwordChange',
        'tokenWithDraw',
    ];

}
