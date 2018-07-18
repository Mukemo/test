<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    public $table = 'lieuxes';

    protected $primaryKey = 'id_lieu';

    public function activite()
    {
      return $this->hasOne('App\Activite','lieu_id');
    }
}
