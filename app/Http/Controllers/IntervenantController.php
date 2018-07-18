<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervenant;

class IntervenantController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['voir']);
  }
  public function index()
  {
    $intervenants = Intervenant::all();
    return view('others.intervenant.intervenant',[ 'intervenants' => $intervenants]);
  }

  public function create()
  {
    return view('others.intervenant.addinterv');
  }

  public function store(Request $request)
  {
    $intervenant = new Intervenant;
    $intervenant->nom = $request->nom;
    $intervenant->postnom = $request->postnom;
    $intervenant->prenom = $request->prenom;
    $intervenant->telephone = $request->telephone;
    $intervenant->email = $request->email;
    $intervenant->avatar = 'simple';
    $intervenant->biography = $request->biographie;
    $intervenant->save();
    return redirect()->back()->with('message','Les informations fournies ont ete enregistrer avec succes');
  }

  public function destroy($id_intervenant)
  {
    $intervenant = Intervenant::findOrFail($id_intervenant);
    $intervenant->delete();
    return redirect()->back()->with('message','Vous avez effacer l\'intervenant '.$intervenant->nom);
  }

  public function show($id_intervenant)
  {
    $intervenant = Intervenant::findOrFail($id_intervenant);
    return view('others.intervenant.modifinterv',['intervenant' => $intervenant]);
  }
  public function update(Request $request, $id_intervenant)
  {
        $intervenant = Intervenant::findOrFail($id_intervenant);
        $intervenant->nom = $request->nom;
        $intervenant->postnom = $request->postnom;
        $intervenant->prenom = $request->prenom;
        $intervenant->telephone = $request->telephone;
        $intervenant->email = $request->email;
        $intervenant->avatar = 'simple';
        $intervenant->biography = $request->biographie;
        $intervenant->save();
        return redirect()->back()->with('message','Votre modification a russi.');
  }

  public function voir($id_intervenant)
  {
    $intervenant = Intervenant::findOrFail($id_intervenant);
    return view('others.intervenant.intervenantdetails',[ 'intervenant' => $intervenant]);
  }
}
