@extends('layouts.master')
@section('content')
<div class="panel">
  @if(Session::has('message'))
    @include('partials.message')
  @endif
  @if(count($lieux) > 0)
  <div class="panel-heading">
      <h3 class="panel-title">Liste des activites</h3>
      <div class="right">
          <a href="{{ route('lieu.index') }}" class="btn btn-info"><i class="lnr lnr-plus-circle"></i> Ajouter un lieu</a>
          <a href="{{ route('activite.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter une activite</a>
      </div>
  </div>
  @endif
  <div class="panel-body">
    @if(count($activites) > 0)
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nom de la salle</th>
                  <th>Nom du lieu</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($activites as $activite)
              <tr>
                  <td>{{ $activite->id_activite }}</td>
                  <td>{{ $activite->nom_activite }}</td>
                  <td>{{ $activite->lieu->nom_salle }}</td>
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
        <h3>Ajouter d'abord un lieu avant d;ajouter une activiter</h3>
        <a href="{{ route('lieu.index') }}" class="btn btn-info"><i class="lnr lnr-plus-circle"></i> Ajouter un lieu</a>
     </div>
  @endif

<!-- END RECENT PURCHASES -->
</div>
@endsection
