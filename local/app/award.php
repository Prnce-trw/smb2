<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    protected $table = 'tb_award';
    protected $primaryKey = 'award_id';

    public function getAwardImgs()
    {
        return $this->hasMany(award_img::class, 'award_img_f', 'award_id');
    }

    public function getCarBrand()
    {
        return $this->hasOne(carbrand::class, 'car_brand_id', 'award_cardbrand');
    }

    public function getCarModel()
    {
        return $this->hasOne(carmodel::class, 'car_model_id', 'award_carmodel');
    }

    public function getProduct()
    {
        return $this->hasOne(product::class, 'product_id', 'award_product');
    }
}
