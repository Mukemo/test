@extends('layouts.master')
@section('content')
<div class="panel">
  @if(Session::has('message'))
    @include('partials.message')
  @endif
  <div class="panel-heading">
      <h3 class="panel-title">Liste des programmes.</h3>
      <div class="right">
          <a href="{{ route('programme.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un programme</a>
      </div>
  </div>
  <div class="panel-body">
    @if(count($programmes) > 0)
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Heure debut</th>
                  <th>Heure fin</th>
                  <th>Date</th>
                  <th>Libelle</th>
                  <th>Nom de l'intervenant</th>
                  <th>Nom de l'Evenement</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($programmes as $programme)
              <tr>
                  <td>{{ $programme->id_programme}}</td>
                  <td>{{ $programme->heure_debut }}</td>
                  <td>{{ $programme->heure_fin }}</td>
                  <td>{{ $programme->date }}</td>
                  <td>{{ $programme->libelle }}</td>

                  <td>
                       {{ $programme->intervenant->nom .' '.$programme->intervenant->postnom.' '. $programme->intervenant->prenom}}
                  </td>
                  <td>{{ $programme->activite->nom_activite }}</td>
                  <td>
                     <a href="" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
                  </td>
              </tr>
             @endforeach
          </tbody>
      </table>
      <div class="panel-footer">
          <div class="row">
              <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
              <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
          </div>
      </div>
    </div>
  @else
     <div class="panel-body">
        <h3>La liste des programmes est vide.</h3>
     </div>
  @endif

<!-- END RECENT PURCHASES -->
</div>
@endsection
