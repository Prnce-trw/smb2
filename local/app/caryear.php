<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caryear extends Model
{
    protected $table = 'tb_car_year';
    protected $primaryKey = 'car_year_id';

    public function getCarModel()
    {
        return $this->belongsTo(carmodel::class, 'car_year_model_id');
    }

    public function getProductCar_caryear()
    {
        return $this->belongsTo(productcar::class, 'car_year_id');
    }
}
