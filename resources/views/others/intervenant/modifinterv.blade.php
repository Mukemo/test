@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('intervenant.update',[ 'id_intervenant'=> $intervenant->id_intervenant ]) }}">
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Ajouter un intervenant.</h3>
        </div>
        <div class="panel-body">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right">Profile</td>
                <td><img src="{{ asset('img/default-profile.png') }}" alt="" style="width:80px;margin-left:50px;"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Prénom</td>
                <td><input class="form-control width-input" name="prenom" type="text" value="{{ $intervenant->prenom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Nom</td>
                <td><input class="form-control width-input" name="nom" type="text" value="{{ $intervenant->nom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Postnom</td>
                <td><input class="form-control width-input" name="postnom" type="text" value="{{ $intervenant->postnom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Email</td>
                <td><input class="form-control width-input" name="email" type="text" value="{{ $intervenant->email }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Telephone</td>
                <td><input class="form-control width-input" type="text" name="telephone" value="{{ $intervenant->telephone }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Biographie</td>
                <td><textarea class="form-control width-input" name="biographie">{{ $intervenant->biography }}</textarea></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success">Enregistrer</button>
          <button type="reset" class="btn btn-info">Reinitialiser</button>
        </div>
    </div>
    </form>
</div>
@endsection
