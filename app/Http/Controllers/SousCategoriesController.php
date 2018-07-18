<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sous_categories;
use Session;

class SousCategoriesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $scategories = Sous_categories::all();
       return view('admin.scategorie',[ 'scategories' => $scategories]);
    }

    public function create(Request $request)
    {
       // dd($request->all());
       $scategorie = new Sous_categories;
       $scategorie->libelle = $request->libelle;
       $scategorie->save();
       return redirect()->route('sous_categorie.index')->with('message','votre operation a reussi.');
    }

    public function delete($id_scat)
    {
      $id = Sous_categories::findOrFail($id_scat);
      $libelle = $id->libelle;
      $id->delete();
      return redirect()->back()->with('message','vous avez effacer le libelle '.$id);
    }
}
