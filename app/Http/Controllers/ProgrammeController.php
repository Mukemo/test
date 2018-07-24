<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;
use App\Activite;
use App\Intervenant;

class ProgrammeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $programmes = Programme::all();
      return view('others.programme.programme',[ 'programmes' => $programmes]);
    }

    public function create()
    {
      $activites = Activite::all();
      $intervenants = Intervenant::all();
      return view('others.programme.addprog',[ 'intervenants' => $intervenants, 'activites' =>$activites ]);
    }

    public function store(Request $request)
    {
       $programme = new Programme;
       $programme->heure_debut = $request->heure_debut;
       $programme->heure_fin = $request->heure_fin;
       $programme->date = $request->date;
       $programme->libelle = $request->nom_program;
       $programme->activite_id = $request->activite;
       $programme->intervenant_id = $request->intervenant;
       $programme->save();
       return redirect()->back()->with('message','Les informations fournies ont ete enregistrer avec succes');
    }

    public function destroy($id_programme)
    {
      $programme = Programme::find($id_programme);
      $programme->delete();
      return redirect()->back()->with('message','Vous avez supprimer '.$programme->libelle);
    }
}
