<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public $table = 'activites';

    protected $primaryKey = 'id_activite';
    protected $fillable = ['nom_activite', 'lieu_id'];

    public function programme()
    {
      return $this->hasOne('App\Programme','activite_id');
    }

    public function lieu()
    {
      return $this->belongsTo('App\Lieux','lieu_id');
    }

    // public function participations()
    // {
    //   return $this->hasMany('App\Participation','activite_id');
    // }

    public function personnes()
    {
      return $this->belongsToMany('App\Personne', 'participations', 'activite_id', 'personne_id');
    }
}
