<?php

namespace App;
use App\Intervenant;

use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
  public $table = 'intervenants';
  protected $primaryKey = 'id_intervenant';

  public function programmes()
  {
    return $this->hasMany('App\Programme','intervenant_id');
  }
}
