<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pcd extends Model
{
    protected $table = 'tb_pcd';
    protected $primaryKey = 'pcd_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'pcd_fkey');
    }
}
