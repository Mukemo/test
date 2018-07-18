<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Chauffeur;
use App\Intervenant;
use App\Hotesse;
use App\Personne;
use App\User;
use App\Profile;
use App\Activite;
use App\Affectation;

class UserController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth')->except(['logIn','connexion']);
     }
     public function index()
     {
         $chauffeurs = Chauffeur::all();
         $intervenants = Intervenant::all();
         $hotesses = Hotesse::all();
         $personnes = Personne::all();
         $activites = Activite::all();
         $affectations = Affectation::all();
         return view('admin.dashboard',['chauffeurs'=> $chauffeurs, 'intervenants' => $intervenants, 'hotesses' => $hotesses, 'personnes' => $personnes, 'activites' => $activites, 'affectations' => $affectations]);
    }

    public function logIn()
    {
        return view('auth.login');
    }

    public function connexion(Request $request)
    {
        $validations = validator::make($request->all(),[
          'prenom' => 'required',
          'password' => 'required'
          ],
          [
            'required' => 'veuillez entrer l\'informatio de :attribute'
          ]
        );
         if($validations->fails())
         {
           return redirect()->back()->withErrors($validations);
         }

        $data = [ 'prenom' => $request->prenom,'password' => $request->password];
         if (Auth::attempt($data,true))
         {
            Auth::user()->status = true;
            return redirect()->route('admin.dashboard')->with('message','Bienvenue a vous '.$data['prenom']);
         }
       return redirect()->back();
    }

    public function adminList()
    {
        $users = User::all();
        return view('admin.super_admin.listadmin',['users' => $users]);
    }

    public function create()
    {
        return view('admin.super_admin.ajouteradmin');
    }

    public function store(Request $request)
    {
        $messages = array(
                            'required' => 'Veuillez inserer une information dans :attribute.' ,
                            'unique' => 'L\'email est deja enregistrer.' ,
                            'min' => 'Le mot de passe doit compte 4 characters.',
                            'email' => 'Veuillez inserer un correct email addresse dans le champ.'
                         );
        $validations = Validator::make($request->all(),[
          'prenom' => 'required|string|unique',
          'prenom' => 'required|string',
          'postnom' => 'required|string',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:4'
        ],
        $messages
      );

        if($validations->fails())
        {
          return redirect()->back()->withErrors($validations);
        }
        $user = new User;
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->postnom = $request->postnom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->staff_admin = true;
        $user->save();

        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->function = $request->function;
        $profile->save();
        return redirect()->route('admin.list')->with('message','Vous avez enregistrer l\'utilisateur '.$request->prenom);
    }


    public function show($id)
    {
        $user= User::findOrFail($id);
        return view('admin.super_admin.admin_details',[ 'user' => $user]);
    }

    public function edit($id)
    {
       $user = User::findOrFail($id);
       return view('admin.profile',[ 'user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('message','vous avez effacer l\'utilisateur '.$user->name);
    }

    public function logout()
    {
      Auth::logout();
      return redirect()->route('admin.login')->with('message','Merci de vous etre connecter a Makutano admin');
    }

    public function updateProfile(Request $request)
    {
      $user = Auth::user();
      if($request->hasFile('avatar'))
      {
         $avatar = $request->file('avatar');
         $avatar_new_name = time().$avatar->getClientOriginalName();
         $avatar->move('uploads/avatars',$avatar_new_name);
      }
      $user->prenom = $request->prenom;
      $user->nom = $request->nom;
      $user->postnom = $request->postnom;
      $user->email = $request->email;
      if($request->has('password'))
      {
        $request->password = Hash::make($request->password);
      }
      if(Auth::user()->super_admin)
      {
        $user->super_admin = true;
      }else{
        $user->staff_admin = true;
      }

      //$user->profile->avatar = 'uploads/avatars'.$avatar_new_name;
      $user->profile->function = $request->function;
      $user->profile->no_telephone = $request->telephone;
      $user->profile->propos = $request->biographie;
      $user->profile->adresse = $request->address;
      $user->save();
      $user->profile->save();
      return redirect()->back()->with('message',Auth::user()->nom.' vous avez modifier votre profile d\'utilisateur');
    }

}
