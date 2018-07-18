<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'profiles';
    protected $fillable = ['avatar','no_telephone', 'function','propos','adresse','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
