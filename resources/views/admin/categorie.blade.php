@extends('layouts.master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Ajouter une sous categories.</h3>
        <div class="right">
            <a href="{{ route('sous_categorie.index') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter une categorie</a>
        </div>
    </div>
    <div class="panel-body ">
      @if(Session::has('message'))
            @include('partials.message')
      @endif
      <form class="form" action="{{ route('categorie.create') }}" method="POST">
           {{ csrf_field() }}
        <table class="table table-bordered">
          <tr>
            <td align="right">Libelle</td>
            <td><input type="text" name="libelle" class="form-control"></td>
            <td><button type="submit" class="btn btn-info"><span class="lnr lnr-enter"></span> Enregistrer</button></td>
          </tr>
        </table>
      </form>
      @if(count($categories) > 0)
      <hr>
      <h3 class="panel-title" style="margin-top:10px;margin-bottom:10px;">Liste des categories.</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Libelle</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id_cat }}</td>
                    <td>{{ $categorie->libelle }}</td>
                    <td>
                        <a href="{{ route('categorie.delete',[ 'id_cat' => $categorie->id_cat ]) }}" class="btn btn-danger btn-sm"><span class="lnr lnr-trash"></span> Effacer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endif
<!-- END RECENT PURCHASES -->
</div>
@endsection
