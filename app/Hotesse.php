<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotesse extends Model
{
   protected $primaryKey = 'id_hotesse';

   public function affectation()
   {
     return $this->hasOne('App\Affectation','hotesse_id');
   }
}
