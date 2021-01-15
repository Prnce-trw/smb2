<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carbrand extends Model
{
    protected $table = 'tb_car_brand';
    protected $primaryKey = 'car_brand_id';

    public function getCarModels()
    {
        return $this->hasMany(carmodel::class, 'car_model_brand_id', 'car_brand_id');
    }

    public function getProductCar_carbrand()
    {
        return $this->belongsTo(productcar::class, 'car_brand_id');
    }

    public function getAward()
    {
        return $this->belongsTo(award::class, 'car_brand_id');
    }
}
