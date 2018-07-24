<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Activite;
use App\Lieux;
use App\Personne;

class ActiviteController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $activites = Activite::all();
      $lieux = Lieux::all();
      return view('others.activite.activite',[ 'activites' => $activites ,'lieux' => $lieux ]);
    }

    public function create()
    {
      $lieux = Lieux::all();
      return view('others.activite.ajouteractiviter',[ 'lieux' => $lieux ]);
    }
    public function store(Request $request)
    {
      $messages = array('required' => 'Veuillez inserer une information dans le champ :attribute.');
      $validations = Validator::make($request->all(),[ 'nom_activite' => 'required|string'],$messages);
      if($validations->fails())
      {
        return redirect()->back()->withErrors($validations);
      }
      $activite = new Activite;
      $activite->nom_activite = $request->nom_activite;
      $activite->lieu_id = $request->lieu;
      $activite->save();
      return redirect()->back()->with('message','L\'information fournie a ete enregistrer avec succes');
    }

    public function delete($id_activite)
    {
      $activite = Activite::find($id_activite);
      $activite->delete();
      return redirect()->back()->with('message','vous avez supprimer '.$activite->nom_activite);
    }

    public function destroy($id_activite, $id_personne)
    {
      Personne::find($id_personne)->activites()->detach($id_activite);
      return back();
    }
}
