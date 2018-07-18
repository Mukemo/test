<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotesse;

class HotesseController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
    $hotesses = Hotesse::all();
    return view('others.hotesse.hotesse',[ 'hotesses' => $hotesses ]);
  }
  public function create()
  {
    return view('others.hotesse.addhotess');
  }

  public function store(Request $request)
  {
    $hotesse = new Hotesse;
    $hotesse->nom = $request->nom;
    $hotesse->postnom = $request->postnom;
    $hotesse->prenom = $request->prenom;
    $hotesse->save();
    return redirect()->back()->with('message','Les informations fournies ont ete enregistrer avec succe');
  }

  public function destroy($id_hotesse)
  {
    $hotesse = Hotesse::find($id_hotesse);
    $hotesse->delete();
    return redirect()->back()->with('message','vous avez effacer '.$hotesse->nom);
  }
}
