<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{

    protected $primaryKey = 'id_personne';
    protected $fillable = ['nom','post_nom','telephone','email','profession','scat_id','cat_id'];

    public function categorie()
    {
       return $this->belongsTo('App\Categories','cat_id');
    }

    public function scategorie()
    {
       return $this->belongsTo('App\Sous_categories','scat_id');
    }

    public function affectation()
    {
      return $this->hasOne('App\Affectation','personne_id');
    }

    public function participations()
    {
      return $this->hasMany('App\Participation','personne_id');
    }
}
