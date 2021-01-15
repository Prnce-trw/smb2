<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productimgset extends Model
{
    protected $table = 'tb_product_imgset';
    protected $primaryKey = 'product_imgset_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'product_imgset_product_id');
    }

    public function getColor()
    {
        return $this->belongsTo(color::class, 'color_id');
    }
}
