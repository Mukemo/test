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
       $affectations = Affectation::all();
       return view('others.affectation.affectation',compact('affectations'));
    }

    public function create()
    {
      $personnes = Personne::all();
      $hotesses = Hotesse::all();
      $chauffeurs = Chauffeur::all();
      return view('others.affectation.affecter',compact('personnes','activites','chauffeurs'));
    }

    public function destroy($id)
    {
      $affectation = Affectation::find($id);
      $affectation->delete();
      return redirect()->back()->with('message','vous avez supprimer une affectation');
    }
}
