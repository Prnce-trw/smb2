<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\address;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'tb_users';
    protected $primaryKey = 'user_id';

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'last_login_ip',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function checkUsersStatus()
    {
        if ($this->user_status == 1) {
            return '<label class="label label-lglabel-lg label-danger">Admin</label>';
        } elseif ($this->user_status == 2) {
            return '<label class="label label-lg label-info">Customer</label>'; 
        }
    }

    public function getActivityLogs()
    {
        return $this->hasMany(activitylog::class, 'log_user_id', 'user_id');
    }

    public function getCustomerAddress()
    {
        return $this->hasMany(address::class, 'address_user_id', 'user_id');
    }
}
