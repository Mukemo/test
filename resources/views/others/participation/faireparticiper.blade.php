@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('participation.store') }}">
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Faire participer a l'evenement.</h3>
        </div>
        <div class="panel-body">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Intervenant</td>
                <td>
                  <p>{{ $personne->nom .' '. $personne->post_nom .' '. $personne->prenom }}</p>
                  <input type="hidden" value="{{ $personne->id_personne }}" name="personne_id">
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Attribuer les evenements</td>
                <td>
                  @foreach($activites as $activite)
                    <div class="checkbox">
                      <input type="checkbox" name="participations[]" value="{{ $activite->id_activite }}">
                      {{ $activite->nom_activite }}
                    </div>
                  @endforeach
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
