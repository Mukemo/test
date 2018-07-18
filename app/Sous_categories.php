<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sous_categories extends Model
{

  protected $primaryKey = 'id_scat';

  protected $fillable = ['libelle','id_personne'];

  public function personnes()
  {
    return $this->hasMany('App\Personne','scat_id');
  }
}
