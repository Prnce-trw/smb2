<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class et extends Model
{
    protected $table = 'tb_et';
    protected $primaryKey = 'et_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'et_fkey');
    }
}
