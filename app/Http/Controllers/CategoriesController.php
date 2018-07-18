<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $categories = Categories::all();
      return view('admin.categorie',[ 'categories'=> $categories]);
    }

    public function create(Request $request)
    {
      $categorie = new Categories;
      $categorie->libelle = $request->libelle;
      $categorie->save();
      return redirect()->route('categorie.index')->with('message','votre operation a reussi');
    }

    public function delete($id_cat)
    {
      $categorie = Categories::findOrFail($id_cat);
      $categorie->delete();
      return redirect()->route('categorie.index')->with('message','vous avez effacer le libelle '.$categorie->libelle);
    }
}
