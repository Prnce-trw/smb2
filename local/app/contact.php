<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'tb_contact';
    protected $primaryKey = 'contact_id';

    public function getContactBanners()
    {
        return $this->hasMany(contactbanner::class, 'cb_contact_id', 'contact_id');
    }
}
