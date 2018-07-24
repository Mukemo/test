@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="">
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
            <thead>
              <th>No</th>
              <th>Nom du participant</th>
              <th>Hotesse affectee</th>
              <th>Chauffeur affecte</th>
              <th>Action</th>
            </thead>
            <tbody>
             @foreach($personnes as $personne)
              <tr>
                <td>{{ $personne->id_personne }}</td>
                <td><p>{{ $personne->nom .' '. $personne->post_nom .' '. $personne->prenom }}</p></td>
                <td>
                  {{ $personne->affectation ? 'deja affecter': 'pas encore affecter' }}
                </td>
                <td>
                  {{ $personne->affectation ? 'deja affecter' : 'encore affecter' }}
                </td>
                <td>
                   <a href="{{ route('') }}" class="">Affecter</href>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
    </form>
</div>
@endsection
