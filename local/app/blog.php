<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'tb_blog';
    protected $primaryKey = 'blog_id';
}
