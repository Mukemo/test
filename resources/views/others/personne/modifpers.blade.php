@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('personne.update',[ 'id_personne' => $personne->id_personne ]) }}">
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Ajouter une personne.</h3>
        </div>
        <div class="panel-body">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Prénom</td>
                <td><input class="form-control width-input" name="nom" type="text" value="{{ $personne->prenom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Nom</td>
                <td><input class="form-control width-input" name="postnom" type="text" value="{{ $personne->nom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Postnom</td>
                <td><input class="form-control width-input" name="prenom" type="text" value="{{ $personne->post_nom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Email</td>
                <td><input class="form-control width-input" name="email" type="text" value="{{ $personne->email }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Categorie</td>
                <td>
                   <select name="categorie" class="form-control width-input">
                     @foreach($categories as $categorie)
                       <option value="{{ $categorie->id_cat }}">{{ $categorie->libelle }}</option>
                     @endforeach
                   </select>
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Sous Categorie</td>
                <td>
                  <!-- <input class="form-control width-input" name="function" type="text" value=""> -->
                  <select name="scategorie" class="form-control width-input">
                    @foreach($scategories as $scategorie)
                      <option value="{{ $scategorie->id_scat }}">{{ $scategorie->libelle }}</option>
                    @endforeach
                </select>
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Telephone</td>
                <td><input class="form-control width-input" type="text" name="telephone" value="{{ $personne->telephone }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Profession</td>
                <td><input class="form-control width-input" name="profession" type="text" value="{{ $personne->profession }}"></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success">Enregistrer</button>
          <button type="reset" class="btn btn-info">Reinitialiser</button>
        </div>
    </div>
    </form>
</div>
@endsection
