<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Lieux;
use App\Activite;

class LieuxController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }
    public function index()
    {
      $lieux = Lieux::all();
      return view('others.lieu.lieu',[ 'lieux' => $lieux ]);
    }

    public function create()
    {
      $lieux = Lieux::all();
      return view('others.lieu.ajouterlieu',[ 'lieux' => $lieux ]);
    }
    public function store(Request $request)
    {
      $messages = array('required' => 'Veuillez inserer une information dans le champ :attribute.');
      $validations = Validator::make($request->all(),[ 'nom_salle' => 'required|string'],$messages);
      if($validations->fails())
      {
        return redirect()->back()->withErrors($validations);
      }
      $lieu = new Lieux;
      $lieu->nom_salle = $request->nom_salle;
      $lieu->save();

      return redirect()->back()->with('message','les informations fournies on ete enregistrer avec succes');
    }
    public function destroy($id_lieu)
    {
      $lieu = Lieux::find($id_lieu);
      $lieu->delete();
      return redirect()->back()->with('message','vous avez effacer la place '.$lieu->nom_salle);
    }
}
