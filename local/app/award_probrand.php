<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award_probrand extends Model
{
    protected $table = 'tb_award_probrand';
    protected $primaryKey = 'award_probrand_id';

    public function getAwardImgs()
    {
        return $this->belongsTo(award_img::class, 'award_img_id');
    }

    public function AwardgetBrand()
    {
        return $this->hasOne(brand::class, 'brand_id', 'award_brand_id');
    }

    public function AwardgetProducts()
    {
        return $this->hasOne(product::class, 'product_id', 'award_product_id');
    }
}
