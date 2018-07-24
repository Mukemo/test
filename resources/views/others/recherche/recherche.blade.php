@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('search.method') }}">
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <h3 class="panel-title">Rechercher en entrant le nom.</h3>
        </div>
        <div class="panel-body">
          @if( $errors->any())
             @include('partials.error')
          @endif
          <table class="table">
            <tbody>
              <tr>
                <td><input class="form-control" name="champ_de_recherche" type="text"></td>
                <td align="left" class="align-element"><button type="submit" class="btn btn-primanry"><i class="fa fa-search"></i> <span>Recherche</span></button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    </form>
 </div>
 <div class="container">
    @if(isset($personne))
    <h2>Resultat de la recherche.</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personne as $p)
            <tr>
                <td>{{ $p->nom.' '.$p->post_nom.' '.$p->prenom }}</td>
                <td><a href="{{ route('personne.voir',[ 'id_personne' => $p->id_personne]) }}" class="btn btn-success"><span class="lnr lnr-eye"></span>Voir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection
