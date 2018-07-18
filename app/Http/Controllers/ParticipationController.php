<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participation;
use App\Personne;

class ParticipationController extends Controller
{
   public function index()
   {
     $participations = Participation::all();
     return view('others.participation.participation',compact('participations'));
   }
}
