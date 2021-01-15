<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = 'tb_brand';
    protected $primaryKey = 'brand_id';

    public function getProducts()
    {
        return $this->hasMany(product::class, 'product_brand_id', 'brand_id');
    }

    public function getProductType()
    {
        return $this->belongsTo(producttype::class, 'brand_product_type');
    }

    public function getAwardImg()
    {
        return $this->belongsTo(award_img::class, 'brand_id');
    }
}
