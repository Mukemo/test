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
       dd($request->all());
    }
}
