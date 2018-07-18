<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    public $table = 'programmes';
    protected $fillable = ['heure_debut','heure_fin','date','activite_id', 'intervenant_id'];

    public function intervenant()
    {
      return $this->belongsTo('App\Intervenant','intervenant_id');
    }

    public function activite()
    {
      return $this->belongsTo('App\Activite','activite_id');
    }
}
