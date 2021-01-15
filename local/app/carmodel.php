<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carmodel extends Model
{
    protected $table = 'tb_car_model';
    protected $primaryKey = 'car_model_id';

    public function getCarBrand()
    {
        return $this->belongsTo(carbrand::class, 'car_model_brand_id');
    }

    public function getCarYears()
    {
        return $this->hasMany(caryear::class, 'car_year_model_id', 'car_model_id');
    }

    public function getCarTireSizes()
    {
        return $this->hasMany(cartiresize::class, 'tireSize_carmodel_id', 'car_model_id');
    }

    public function getProductCar_carmodel()
    {
        return $this->belongsTo(productcar::class, 'car_brand_id');
    }
    
    public function getAward()
    {
        return $this->belongsTo(award::class, 'car_model_id');
    }
}
