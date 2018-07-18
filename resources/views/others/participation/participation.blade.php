@extends('layouts.master')
@section('content')
<div class="panel">
  @if(count($participations) > 0)
    <div class="panel-heading">
        <h3 class="panel-title">Liste des particpants.</h3>
        <div class="right">
            <a href="" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un particpant</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nom du participant</th>
                    <th>Evenements</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($participations as $participation)
                <tr>
                    <td>{{ $participation->id_participation }}</td>
                    <td>{{ $participation->personne->nom .' '. $participation->personne->post_nom .' '. $participation->personne->prenom }} </td>
                    <td>{{ $participation->activite->nom_activite }}</td>
                    <td>
                       <a href="" class="btn btn-success"><span class="lnr lnr-eye"></span>Voir</a>
                       <a href="" class="btn btn-success"><span class="lnr lnr-eye"></span> Modifier</a>
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
  <div class="panel-heading">
    <h3 class="panel-title">Veuillez entrer les categorie et sous categorie.</h3>
  </div>
@endif
<!-- END RECENT PURCHASES -->
</div>
@endsection
