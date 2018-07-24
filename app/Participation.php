<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    public $table = 'participations';
    protected $primaryKey = 'id_participation';
    protected $fillable = ['activite_id','personne_id'];

    public function personne()
    {
      return $this->belongsTo('App\Personne','personne_id');
    }

    public function activite()
    {
      return $this->belongsTo('App\Activite','activite_id');
    }
}
