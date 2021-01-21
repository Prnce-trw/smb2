<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award_img extends Model
{
    protected $table = 'tb_award_img';
    protected $primaryKey = 'award_img_id';

    public function getAward()
    {
        return $this->belongsTo(award::class, 'award_img_f');
    }

    public function getProduct()
    {
        return $this->hasOne(product::class, 'product_id', 'award_product_id');
    }

    public function getProductBrand()
    {
        return $this->hasOne(brand::class, 'brand_id', 'award_productbrand_id');
    }

    public function getAwardProductBrand()
    {
        return $this->hasMany(award_probrand::class, 'award_img_id', 'award_img_id');
    }
}
