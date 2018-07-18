<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','super_admin','staff_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_super_admin()
    {
        if($this->super_admin)
        {
            return true;
        }
        return false;
    }

    public function is_staff_admin()
    {
        if($this->staff_admin)
        {
            return true;
        }
        return false;
    }

    public function profile()
    {
        return $this->hasOne('App\Profile','user_id');
    }
}
