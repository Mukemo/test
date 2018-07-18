@extends('layouts.master')
@section('content')
<div class="panel">
  <div class="panel-heading">
      <h3 class="panel-title">Liste des intevernants.</h3>
      <div class="right">
          <a href="{{ route('hotesse.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter une hotesse</a>
      </div>
  </div>
  <div class="panel-body">
    @if(count($hotesses) > 0)
      <table class="table table-striped">
          <thead>s
              <tr>
                  <th>No</th>
                  <th>Nom en entier</th>
              </tr>
          </thead>
          <tbody>
            @foreach($hotesses as $hotesse)
              <tr>
                  <td>{{ $hotesse->id_hotesse }}</td>
                  <td>{{ $hotesse->nom .' '. $hotesse->postnom .' '.$hotesse->prenom }}</td>
                  <td>
                     <a href="{{ route('hotesse.effacer',[ $hotesse->id_hotesse ]) }}" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
                  </td>
              </tr>
             @endforeach
          </tbody>
      </table>
      <div class="panel-footer">
          <div class="row">
              <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i>
                @if($hotesses)
                  <p>{{ count($hotesses) }} Hotesse(s)</p>
                @endif
              </span></div>
              <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
          </div>
      </div>
    </div>
  @else
     <div class="panel-body">
        <h3>La liste des hotesses est vide.</h3>
     </div>
  @endif
</div>
@endsection
