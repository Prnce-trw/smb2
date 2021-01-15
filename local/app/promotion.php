<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class promotion extends Model
{
    protected $table = 'tb_promotion';
    protected $primaryKey = 'promotion_id';

    public function show()
    {
        if ($this->promotion_show == 1) {
            return '<span style="color: #2ed8b6;"><i class="fa fa-2x fa-check"></i></span>'; 
        } else {
            return '<span style="color: #FF5370;"><i class="fa fa-2x fa-times"></i></span>'; 
        }
    }

    public function checkDateExpire()
    {
        if ($this->promotion_date_end > Carbon::now()->toDateTimeString()) {
            return '<label class="label label-success">Unexpire</label>';
        } else {
            return '<label class="label label-danger">Expire</label>';
        }
        
    }
}
