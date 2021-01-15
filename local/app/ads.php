<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    protected $table = 'tb_ads';
    protected $primaryKey = 'ads_id';

    public function adsStatus()
    {
        if ($this->ads_show_status == 1) {
            return '<span style="color: #2ed8b6;"><i class="fa fa-2x fa-check"></i></span>';
        } else {
            return '<span style="color: #FF5370;"><i class="fa fa-2x fa-times"></i></span>'; 
        }
    }
}
