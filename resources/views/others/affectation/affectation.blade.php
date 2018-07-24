@extends('layouts.master')
@section('content')
<div class="panel">
    <div class="panel-heading">
      @if(Session::has('message'))
          @include('partials.message')
      @endif
        <h3 class="panel-title">Liste des affectations.</h3>
        <div class="right">
          <a href="{{ route('affectation.create') }}" class="btn btn-success">Ajouter une affectation</a>
        </div>
    </div>
    <div class="panel-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Designation</th>
                    <th>Hotesse</th>
                    <th>Chauffeur</th>
                    <th>Date d'affectation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($affectations as $affectation)
                <tr>
                    <td>{{ $affectation->id }}</td>
                    <td>
                      <p>{{ $affectation->personne->nom .' '.$affectation->personne->post_nom.' '.$affectation->personne->prenom }}</p>
                      <p style="margin-left:5px;margin-top: -10px;font-size:14px;color:rgb(255,222,0);">{{ $affectation->personne->profession }}</p>
                    </td>
                    <td>
                      <p>{{ $affectation->hotesse->nom .' '.$affectation->hotesse->postnom .' '.$affectation->hotesse->prenom }}</p>
                      <p style="margin-left:5px;margin-top: -10px;font-size:14px;color:rgb(255,222,0);">Telephone</p>
                    </td>
                    <td>
                      <p>{{ $affectation->chauffeur->nom_chauffeur .' '.$affectation->chauffeur->postnom_chauffeur .' '.$affectation->chauffeur->prenom }}</p>
                      <p style="margin-left:5px;margin-top: -10px;font-size:14px;color:rgb(255,222,0);">{{ $affectation->chauffeur->telephone }}</p>
                    </td>
                    <td>
                        {{ $affectation->created_at->format('d M Y') }}
                    </td>
                    <td>
                        <a href="" class="btn btn-info btn-sm"><span class="lnr lnr-eye"></span> Affecter</a>
                        <a href="{{ route('affectation.effacer',[ 'id' =>$affectation->id ]) }}" class="btn btn-danger btn-sm"><span class="lnr lnr-trash"></span> Effacer</a>
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
<!-- END RECENT PURCHASES -->
</div>
@endsection
