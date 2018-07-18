@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('programme.store') }}">
      {{ csrf_field() }}

      <div class="panel">
        <div class="panel-heading">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <h3 class="panel-title">Ajouter un administrateur.</h3>
        </div>
        <div class="panel-body">
          @if( $errors->any())
             @include('partials.error')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Heure debut</td>
                <td><input class="form-control width-input" name="heure_debut" type="time"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Heure fin</td>
                <td><input class="form-control width-input" name="heure_fin" type="time"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Date</td>
                <td><input class="form-control width-input" name="date" type="date"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Nom du Program</td>
                <td><input class="form-control width-input" name="nom_program" type="text" value=""></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Choisissez l'intervenant</td>
                <td>
                  <select name="intervenant" class="form-control width-input">
                    @foreach($intervenants as $intervenant)
                      <option value="{{ $intervenant->id_intervenant }}" >{{ $intervenant->nom .' '.$intervenant->postnom.' '.$intervenant->prenom }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Choisissez l'activite</td>
                <td>
                  <select name="activite" class="form-control width-input">
                    @foreach($activites as $activite)
                      <option value="{{ $activite->id_activite }}" >{{ $activite->nom_activite }}</option>
                    @endforeach
                  </select>
                </td>
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
