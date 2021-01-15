<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activitylog extends Model
{
    protected $table = 'activity_log';
    protected $primaryKey = 'log_id';
    
    public function getUser()
    {
        $getUser =  $this->belongsTo(User::class, 'log_user_id')->first();
        if ($getUser == null) {
            return '';
        } else {
            return $getUser->name.' '.$getUser->user_lname;
        }
        
    }

    public function getSitemap()
    {
        return $this->belongsTo(sitemap::class, 'log_sitemap_id');
    }
}
