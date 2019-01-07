<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public $table='table_user_profile';
    protected $fillable = [
        'address','personalid','bod','pob','userid'

    ];

    public function Profil() {
        return $this->hasOne(User::class,'id','userid');
    }

}
