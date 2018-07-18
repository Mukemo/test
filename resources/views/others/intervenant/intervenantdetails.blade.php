@extends('layouts.app')
@section('title')
  {{ $intervenant->nom.' '.$intervenant->postnom .' '. $intervenant->prenom }}
@endsection
@section('content')
  <div class="wrapper-total">
    <div class="card-wrapper">
      <div>
        <!-- PROFILE HEADER -->
        <div class="profile-header">
          <div class="overlay"></div>
          <div class="background">
            <img src="https://alchetron.com/cdn/tony-elumelu-65a0b252-f0ef-4903-8c65-8335b5f1d6c-resize-750.jpeg" class="img-rectangle" alt="Avatar">
            <h2 class="name">{{ $intervenant->nom .' '.$intervenant->postnom.' '.$intervenant->prenom }}</h2>
          </div>
          <div class="profile-stat">
            <div class="row">
              <div class="col-md-3 stat-item">
                  <img src="{{ asset('/img/ok.png') }}" width="50"><span>Soiree des sponsors</span>
              </div>
              <div class="col-md-3 stat-item">
                <img src="{{ asset('/img/notok.png') }}" width="45"><span>Tables rondes</span>
              </div>
              <div class="col-md-3 stat-item">
                <img src="{{ asset('/img/ok.png') }}" width="50"> <span>Gala</span>
              </div>
              <div class="col-md-3 stat-item">
                <img src="{{ asset('/img/ok.png') }}" width="50"> <span>Gala</span>
              </div>
              </div>
              <div class="col-md-6  col-offset-3 stat-item text-center">
              </div>
            </div>
          </div>
        </div>
        <!-- END PROFILE HEADER -->
        <!-- PROFILE DETAIL -->
        <div class="profile-detail">
          <div class="text-center">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate(Request::url())) !!} ">
          </div>
        </div>
        <!-- END PROFILE DETAIL -->
      </div>
    </div>
  </div>
@endsection
