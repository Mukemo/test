@extends('layouts.master')
@section('content')
<div class="details">

  <div class="container-fluid">
    @if(Session::has('message'))
      @include('partials.message')
    @endif
    <form method="POST" action="{{ route('lieu.store') }}">
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Ajouter un lieu.</h3>
        </div>
        <div class="panel-body">
          @if( $errors->any())
             @include('partials.error')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Nom du lieu</td>
                <td><input class="form-control width-input" name="nom_salle" type="text"></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success">Enregistrer</button>
          <button type="reset" class="btn btn-info">Reinitialiser</button>
        </div>
    </div>
    </form>
</div>
<div class="panel">
  @if(count($lieux) > 0)
  <div class="panel-heading">
      <h3 class="panel-title">Liste des lieux.</h3>
  </div>
  <div class="panel-body">
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nom de la salle</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($lieux as $lieu)
              <tr>
                  <td>{{ $lieu->id_lieu }}</td>
                  <td>{{ $lieu->nom_salle }}</td>
                  <td>
                     <a href="{{ route('lieu.delete',[ 'id_lieu' => $lieu->id_lieu ]) }}" class="btn btn-danger"><span class="lnr lnr-trash"></span> Effacer</a>
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
        <h3>La liste des lieux est vide.</h3>
     </div>
  @endif

<!-- END RECENT PURCHASES -->
</div>
@endsection
