@extends('layouts.master')
@section('content')
<!-- {{ Auth::user()->id }} -->

<div class="details">
  <div class="container-fluid">
    <form method="POST" action="{{ route('admin.update',[ 'id' => $user->id ]) }}">
      @if(Session::has('message'))
        @include('partials.message')
      @endif
      {{ csrf_field() }}
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Profile de l'utilisateur</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td align="right" class="align-element">Profile</td>
                <td>
                  @if( Auth::user()->avatar)
                     Here comes the profile image
                  @else
                     <input type="file" name="avatar" class="form-control width-input">
                  @endif
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Status</td>
                <td>
                  @if(Auth::user()->super_admin)
                     <a href="" class="label label-success">SUPER ADMIN</a>
                  @else
                     <a href="" class="label label-warning">STAFF ADMIN</a>
                  @endif
                </td>
              </tr>
              <tr>
                <td align="right" class="align-element">Prénom</td>
                <td><input class="form-control width-input" name="prenom" type="text" value="{{ $user->prenom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Nom</td>
                <td><input class="form-control width-input" name="nom" type="text" value="{{ $user->nom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Postnom</td>
                <td><input class="form-control width-input" name="postnom" type="text" value="{{ $user->postnom }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Numero Telephone</td>
                <td><input class="form-control width-input" name="telephone" type="text" value="{{ $user->profile->no_telephone }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Email</td>
                <td><input class="form-control width-input" type="text" name="email" value="{{ $user->email }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Mot de passe</td>
                <td><input class="form-control width-input" type="password" name="password" value="{{ $user->password }}"></td>
              </tr>
              <tr>
                <td align="right" class="align-element">Function</td>
                <td><input class="form-control width-input" type="text" name="function" value="{{ ucfirst($user->profile->function) }}"></td>
              </tr>
              <tr>
                <td align="right">Biographie</td>
                <td>
                  <textarea class="form-control width-input" name="biographie">{{ $user->profile->propos }}</textarea>
                </td>
              </tr>
              <tr>
                <td align="right">Adresse</td>
                <td>
                  <input class="form-control width-input" type="text" name="address" value="{{ $user->profile->adresse }}">
                </td>
              </tr>
            </tbody>
          </table>
          <button style="margin-left:180px;" type="submit" class="btn btn-success">Modifier</button>
          <button type="reset" class="btn btn-info">Reinitialiser</button>
        </div>
    </div>

    </form>
</div>
@endsection
