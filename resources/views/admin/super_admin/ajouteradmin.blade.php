@extends('layouts.master')
@section('content')
<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('admin.store') }}">
      {{ csrf_field() }}

      <div class="panel">
        <div class="panel-heading">
          @if(Session::has('message'))
            @include('partials.message')
          @endif
          <h3 class="panel-title">Ajouter un administrateur.</h3>
        </div>
        <div class="panel-body">
          @if( $errors->any())
             @include('partials.error')
          @endif
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Prénom</td>
                <td><input class="form-control width-input" name="prenom" type="text"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Nom</td>
                <td><input class="form-control width-input" name="nom" type="text"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Postnom</td>
                <td><input class="form-control width-input" name="postnom" type="text"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Function</td>
                <td><input class="form-control width-input" name="function" type="text" value=""></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Email</td>
                <td><input class="form-control width-input" type="text" name="email" value=""></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Mot de passe</td>
                <td><input class="form-control width-input" name="password" type="password" value=""></td>
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
