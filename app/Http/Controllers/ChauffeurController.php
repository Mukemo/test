<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Chauffeur;

class ChauffeurController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function index()
    {
      $chauffeurs = Chauffeur::all();
      return view('others.chauffeur.chauffeur',[ 'chauffeurs' => $chauffeurs ]);
    }

    public function create()
    {
      return view('others.chauffeur.ajoutchauf',compact('categories','scategories'));
    }

    public function destroy($id_chauffeur)
    {
      $chauffeur = Chauffeur::findOrFail($id_chauffeur);
      $chauffeur->delete();
      return redirect()->back();
    }

    public function store(Request $request)
    {
      $chauffeur = new Chauffeur;
      $chauffeur->nom_chauffeur = $request->nom;
      $chauffeur->postnom_chauffeur = $request->postnom;
      $chauffeur->prenom = $request->prenom;
      $chauffeur->telephone = $request->telephone;
      $chauffeur->save();
      return redirect()->back()->with('message','votre operation a reussi.');
    }
}
