@extends('layouts.master')
@section('content')
<div class="panel">
  <div class="panel-heading">
      <h3 class="panel-title">Liste des particpants.</h3>
      <div class="right">
          <a href="{{ route('chauffeur.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un chauffeur</a>
      </div>
  </div>
  <div class="panel-body">
    @if(count($chauffeurs) > 0)
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nom en entier</th>
                  <th>No Telephone</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($chauffeurs as $chauffeur)
              <tr>
                  <td>{{ $chauffeur->id_chauffeur }}</td>
                  <td>{{ $chauffeur->nom_chauffeur .' '. $chauffeur->postnom_chauffeur .' '.$chauffeur->prenom }}</td>
                  <td>{{ $chauffeur->telephone }}</td>
                  <td>
                     <a href="" class="btn btn-success"><span class="lnr lnr-eye"></span> Modifier</a>
                     <a href="{{ route('chauffeur.effacer',[ 'id_chauffeur' =>$chauffeur->id_chauffeur ]) }}" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
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
        <h3>La liste des chauffeurs est vide.</h3>
     </div>
  @endif

<!-- END RECENT PURCHASES -->
</div>
@endsection
