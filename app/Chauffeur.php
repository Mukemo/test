<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $primaryKey = 'id_chauffeur';

    public function affectation()
    {
      return $this->hasOne('App\Affectation','chauffeur_id');
    }
}
