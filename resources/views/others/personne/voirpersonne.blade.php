@extends('layouts.app')
@section('content')
<div class="details">
  <div class="container-fluid">
    <div class="panel panel-profile">
      <div class="clearfix">
        <!-- LEFT COLUMN -->
        <div class="profile">
          <!-- PROFILE HEADER -->
          <div class="profile-header">
            <div class="overlay"></div>
            <div class="profile-main" style="background:#fff;">
              <img src="https://images.vexels.com/media/users/3/147103/isolated/preview/e9bf9a44d83e00b1535324b0fda6e91a-instagram-profile-line-icon-by-vexels.png" class="img-circle" alt="Avatar" style="width:200px;border:1px solid rgba(0,0,0,.7);margin:20px 0;">
              <h3 class="name" style="color:rgba(0,0,0,.8);margin-bottom:10px;">{{ $personne->nom .' '.$personne->post_nom.' '.$personne->prenom }}</h3>
              <p style="color:rgba(0,0,0,.8);font-size:15px;">{{ $personne->profession }}</p>
            </div>
            <div class="profile-stat" style="background:rgb(222,0,0);">
              <div class="row">
                @foreach($personne->activites as $activite)
                  <div class="col-md-4 stat-item" style="font-size:16px;">
                     <img src="{{ asset('/img/ok.png') }}" width="80">
                     <p>{{ $activite->nom_activite }}</p>
                  </div>
                @endforeach
                <!-- <div class="col-md-4 stat-item text-center">
                </div>
                <div class="col-md-4 stat-item">
                </div> -->
              </div>
            </div>
          </div>
          <!-- END PROFILE HEADER -->
          <!-- PROFILE DETAIL -->
          <div class="profile-detail text-center">
            <div class="text-center">
              <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate(Request::url())) !!} ">
            </div>
          </div>
          <!-- END PROFILE DETAIL -->
        </div>
        <!-- END LEFT COLUMN -->
        <!-- RIGHT COLUMN -->
        <div class="profile-right">

        </div>
        <!-- END RIGHT COLUMN -->
      </div>
    </div>
  </div>
</div>
@endsection
