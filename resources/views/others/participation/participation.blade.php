@extends('layouts.master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Liste des particpants.</h3>
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
                @foreach($personnes as $personne)
                <tr>
                    <td>{{ $personne->id_personne }}</td>
                    <td>{{ $personne->nom .' '. $personne->post_nom .' '. $personne->prenom }} </td>
                    <td>
                      <ul class="list-group">
                        @foreach($personne->activites as $activite)
                          <li class="list-item" style="padding:10px;">{{ $activite->nom_activite }} <a href="{{ route('activite.effacer',[ $activite->id_activite , $personne->id_personne ]) }}" style="background-color:red;color:#fff;font-style:weight;padding:5px;border-radius:2px;margin-left:20px;margin-top:10px;"><span class="lnr lnr-cross"></span></a></li>
                        @endforeach
                      </ul>
                    </td>
                    <td>
                       <a href="{{ route('participation.show',[ 'id_personne' => $personne->id_personne ]) }}" class="btn btn-success"><span class="lnr lnr-eye"></span>Faire Participer</a>
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
