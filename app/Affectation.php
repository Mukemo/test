<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $primaryKey = 'id';

    public function hotesse()
    {
       return $this->belongsTo('App\Hotesse','hotesse_id');
    }

    public function chauffeur()
    {
       return $this->belongsTo('App\Chauffeur','chauffeur_id');
    }

    public function personne()
    {
       return $this->belongsTo('App\Personne','personne_id');
    }
}
