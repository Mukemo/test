<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    protected $primaryKey = 'id_participation';

    public function personne()
    {
      return $this->belongsTo('App\Personne','personne_id');
    }

    public function activite()
    {
      return $this->belongsTo('App\Activite','activite_id');
    }
}
