<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    protected $table = 'tb_product_type';
    protected $primaryKey = 'p_type_id';

    public function getBrands()
    {
        return $this->hasMany(brand::class, 'brand_product_type', 'p_type_id');
    }
}
