@extends('layouts.master')
@section('content')
        <!-- RECENT PURCHASES -->
        <div class="panel">
            <div class="panel-heading">
              @if(Session::has('message'))
                  @include('partials.message')
              @endif
                <h3 class="panel-title">Liste des administrateur.</h3>
                <div class="right">
                    <a href="{{ route('admin.create') }}" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Ajouter un admin</a>
                </div>
            </div>
            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>prenom</th>
                            <th>profile</th>
                            <th>Email</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>
                              <img src="{{ asset('img/user.png') }}" style="width:40px;"class="img-circle" alt="Avatar">
                             </td>
                            <td>{{ $user->email}}</td>
                            <td>
                                @if($user->super_admin)
                                   <a href="" class="label label-success">SUPER ADMIN</a>
                                @else
                                   <a href="" class="label label-warning">STAFF ADMIN</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.voir',['id' => $user->id ])}}" class="btn btn-info btn-sm"><span class="lnr lnr-eye"></span>  Voir</a>
                                @if(!($user->super_admin))
                                   <a href="{{ route('admin.delete',[ 'id' => $user->id ])}}" class="btn btn-danger btn-sm"><span class="lnr lnr-trash"></span> Effacer</a>
                                @endif
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
