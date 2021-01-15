<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactbanner extends Model
{
    protected $table = 'tb_contact_banner';
    protected $primaryKey = 'cb_id';

    public function getContact()
    {
        return $this->belongsTo(contact::class, 'cb_contact_id');
    }
}
