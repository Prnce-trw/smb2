<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartiresize extends Model
{
    protected $table = 'tb_car_tiresize';
    protected $primaryKey = 'tireSize_id';

    public function user()
    {
        return $this->belongsTo(carmodel::class, 'car_model_id');
    }
}
