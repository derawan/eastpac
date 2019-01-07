<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccounts extends Model
{
    //
    public $table='user_accounts';
    protected $fillable = [
        'userid','UserAccountID','UserKey1','UserKey2','tipe'

    ];

    public function Profil() {
        return $this->hasOne(User::class,'id','userid');
    }
}
