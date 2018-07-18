@extends('layouts.master')
@section('content')
<div class="panel">
  @if(count($categories) > 0 && count($sous_categories) > 0)
    <div class="panel-heading">
        <h3 class="panel-title">Liste des particpants.</h3>
        <div class="right">
            <a href="{{ route('categorie.index') }}" class="btn btn-warning"><i class="lnr lnr-plus-circle"></i> Ajouter une categories</a>
            <a href="{{ route('sous_categorie.index') }}" class="btn btn-info"><i class="lnr lnr-plus-circle"></i> Ajouter une sous categories</a>
            <a href="{{ route('personne.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un particpant</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Designation</th>
                    <th>profile</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Profession</th>
                    <th>Categorie</th>
                    <th>Sous categorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personnes as $personne)
                <tr>
                    <td>{{ $personne->id_personne }}</td>
                    <td>{{ $personne->nom .' '. $personne->post_nom .' '. $personne->prenom }} </td>
                    <td><img src="{{ asset('img/user.png') }}" style="width:40px;"class="img-circle" alt="Avatar"></td>
                    <td>{{ $personne->email}}</td>
                    <td>{{ $personne->telephone }}</td>
                    <td>{{ $personne->profession }}</td>
                    <td>{{ $personne->categorie->libelle }}</td>
                    <td>{{ $personne->scategorie->libelle }}</td>
                    <td>
                       <a href="{{ route('personne.voir',[ 'id_personne' => $personne->id_personne ]) }}" class="btn btn-success"><span class="lnr lnr-eye"></span>Voir</a>
                       <a href="{{ route('personne.show',[ 'id_personne' => $personne->id_personne ]) }}" class="btn btn-success"><span class="lnr lnr-eye"></span> Modifier</a>
                       <a href="{{ route('personne.destroy', [ 'id_personne' => $personne->id_personne ]) }}" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
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
    <a href="{{ route('categorie.index') }}" class="btn btn-warning"><i class="lnr lnr-plus-circle"></i> Ajouter une categories</a>
    <a href="{{ route('sous_categorie.index') }}" class="btn btn-info"><i class="lnr lnr-plus-circle"></i> Ajouter sous categories</a>
    <br>
  </div>
@endif
<!-- END RECENT PURCHASES -->
</div>
@endsection
