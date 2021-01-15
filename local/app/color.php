<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $table = 'tb_color';
    protected $primaryKey = 'color_id';

    public function getProducts()
    {
        return $this->belongsTo(product::class, 'product_id');
    }

    public function getSizes()
    {
        return $this->hasMany(size::class, 'size_color_id', 'color_id');
    }

    public function getColorImgset()
    {
        return $this->hasMany(productimgset::class, 'product_imgset_product_id', 'color_id');
    }
}
