@extends('layouts.master')
@section('content')
<div class="panel">
  <div class="panel-heading">
      <h3 class="panel-title">Liste des intevernants.</h3>
      <div class="right">
          <a href="{{ route('intervenant.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un intervenant</a>
      </div>
  </div>
  <div class="panel-body">
    @if(count($intervenants) > 0)
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nom en entier</th>
                  <th>Profile</th>
                  <th>Email</th>
                  <th>No Telephone</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($intervenants as $intervenant)
              <tr>
                  <td>{{ $intervenant->id_intervenant }}</td>
                  <td>{{ $intervenant->nom .' '. $intervenant->postnom .' '.$intervenant->prenom }}</td>
                  <td>Profile</td>
                  <td>{{ $intervenant->email }}</td>
                  <td>{{ $intervenant->telephone }}</td>
                  <td>
                     <a href="{{ route('intervenant.voir',[ 'id_intervenant' => $intervenant->id_intervenant ])}}" class="btn btn-info"><span class="lnr lnr-eye"></span> Voir</a>
                     <a href="{{ route('intervenant.show',['id_intervenant' => $intervenant->id_intervenant ]) }}" class="btn btn-success"> Modifier</a>
                     <a href="{{ route('intervenant.delete',[ 'id_intervenant' => $intervenant->id_intervenant]) }}" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
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
        <h3>La liste des intervenants est vide.</h3>
     </div>
  @endif

<!-- END RECENT PURCHASES -->
</div>
@endsection
