<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;
use App\Categories;
use App\Sous_categories;
use Session;

class PersonneController extends Controller
{
  public function index()
  {
    $categories = Categories::all();
    $sous_categories = Sous_categories::all();
    $personnes = Personne::all();
    return view('others.personne.personne',[ 'personnes' => $personnes,'categories' => $categories , 'sous_categories' => $sous_categories]);
  }

  public function create()
  {
    $categories = Categories::all();
    $scategories = Sous_categories::all();
    return view('others.personne.ajouterpers',[ 'categories' => $categories , 'scategories' => $scategories]);
  }

  public function store(Request $request)
  {
     $personne = new Personne;
     $personne->nom = $request->nom;
     $personne->post_nom = $request->postnom;
     $personne->prenom = $request->prenom;
     $personne->cat_id = $request->categorie;
     $personne->scat_id = $request->scategorie;
     $personne->profession = $request->profession;
     $personne->email = $request->email;
     $personne->telephone = $request->telephone;
     $personne->save();

     return redirect()->back()->with('message','Les informations fournies ont ete enregistrer avec succes');
  }

  public function delete($id_personne)
  {
     $personne = Personne::findOrFail($id_personne);
     $personne->delete();
     return redirect()->back()->with('message','Vous avez effacer mr(s) '.$personne->nom);
  }

  public function show($id_personne)
  {
    $categories = Categories::all();
    $scategories = Sous_categories::all();
    $personne = Personne::findOrFail($id_personne);
    return view('others.personne.modifpers',[ 'personne' => $personne, 'categories' => $categories, 'scategories' => $scategories]);
  }
  public function update(Request $request, $id_personne)
  {
      $personne = Personne::findOrFail($id_personne);
      $personne->nom = $request->nom;
      $personne->post_nom = $request->postnom;
      $personne->prenom = $request->prenom;
      $personne->cat_id = $request->categorie;
      $personne->scat_id = $request->scategorie;
      $personne->profession = $request->profession;
      $personne->email = $request->email;
      $personne->telephone = $request->telephone;
      $personne->save();
      return redirect()->route('personne.index')->with('message','vos modifications ont reussis');
  }
  public function voir($id_personne)
  {
    $personne = Personne::find($id_personne);
    return view('others.personne.voirpersonne',['personne' => $personne]);
  }
}
