<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participation;
use App\Personne;
use App\Activite;

class ParticipationController extends Controller
{
   public function index()
   {
     $personnes = Personne::paginate(5);
     $participations = Participation::all();
     return view('others.participation.participation',compact('participations','personnes'));
   }

   public function show($id_personne)
   {
      $personne =  Personne::find($id_personne);
      $activites = Activite::all();
      return view('others.participation.faireparticiper',compact('personne','activites'));
   }

   public function store(Request $request)
   {
     // dd($request->all());
     $personne = Personne::find($request->personne_id);
     // dd($personne);

     $activites = Activite::find($request->participations);
     // dd($activites);
     $personne->activites()->saveMany(
       $this->activiteAll($activites)
     );
     // foreach($participations as $participation)
     // {
     //   Participation::create([
     //     'personne_id' => $request->personne_id,
     //     'activite_id' => $participation
     //   ]);
     // }
     return redirect()->back()->with('message','L\'operation a reussie.');
   }

   private function activiteAll($activites )
   {
     $items = [];

     foreach ($activites as $activite) {
       $items[] = $activite;
     }

     return $items;
   }
}
