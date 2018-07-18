@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    @if(count($lieux) > 0)
    <form method="POST" action="{{ route('activite.store') }}">
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
                <td align="right" class="align-element">Nom de l'activite</td>
                <td><input class="form-control width-input" name="nom_activite" type="text"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">choisissez le lieu</td>
                <td>
                    <select name="lieu" class="form-control width-input">
                      @foreach($lieux as $lieu)
                        <option value="{{ $lieu->id_lieu}}">{{ $lieu->nom_salle }}</option>
                      @endforeach
                    </select>
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success">Enregistrer</button>
          <button type="reset" class="btn btn-info">Reinitialiser</button>
        </div>
    </div>
    </form>
    @else

    @endif
  </div>
</div>
@endsection
