<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'tb_user_address';
    protected $primaryKey = 'address_id';

    public function getUser()
    {
        return $this->belongsTo(User::class, 'address_user_id');
    }
}
