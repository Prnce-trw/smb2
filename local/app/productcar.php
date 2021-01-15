<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcar extends Model
{
    protected $table = 'tb_product_car';
    protected $primaryKey = 'pc_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'pc_product_id');
    }

    public function getCarBrands()
    {
        return $this->hasMany(carbrand::class, 'car_brand_id', 'pc_carbrand_id');
    }

    public function getCarModels()
    {
        return $this->hasMany(carmodel::class, 'car_model_id', 'pc_carmodel_id');
    }

    public function getCarYears()
    {
        return $this->hasMany(caryear::class, 'car_year_id', 'pc_caryear_id');
    }
}
