<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sitemap extends Model
{
    protected $table = 'tb_sitemap';
    protected $primaryKey = 'sitemap_id';
    public $timestamps = true;

    public function getActivitylogs_map()
    {
        return $this->hasMany(activitylog::class, 'log_sitemap_id', 'sitemap_id');
    }
}
