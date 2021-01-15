<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $table = 'tb_size';
    protected $primaryKey = 'size_id';

    public function getProduct()
    {
        return $this->belongsTo(product::class, 'size_fkey');
    }

    public function getColor()
    {
        return $this->belongsTo(color::class, 'color_id');
    }
}
