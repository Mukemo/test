<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
   protected $primaryKey = 'id_cat';
   protected $fillable = ['libelle'];

   public function personnes()
   {
     return $this->hasMany('App\Personne','cat_id');
   }
}
