<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affectation;
use App\Personne;
use App\Chauffeur;
use App\Hotesse;
class AffectationController extends Controller
{
    public function index()
    {
       // $personnes = Personne::all();
       // $hotesses = Hotesse::all();
       // $chauffeurs = Chauffeur::all();
       //compact('personnes','hotesses','chauffeurs')
       $affectations = Affectation::all();
       return view('others.affectation.affectation',compact('affectations'));
    }

    public function show($id)
    {
      $id = Affectation::find($id);
      return view('others.affectation.');
    }
}
