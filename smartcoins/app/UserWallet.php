<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    //
    public $table='user_wallets';
    protected $fillable = [
        'userid','walletaddress','walletkey1','walletkey2','tipe'

    ];

    public function Profil() {
        return $this->hasOne(User::class,'id','userid');
    }
}
