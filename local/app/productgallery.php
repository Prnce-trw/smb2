<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productgallery extends Model
{
    protected $table = 'tb_product_gallery';
    protected $primaryKey = 'product_gallery_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'product_gallery_product_id');
    }
}
