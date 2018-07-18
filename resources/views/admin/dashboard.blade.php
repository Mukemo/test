@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            @if(Session::has('message'))
             @include('partials.message')
            @endif
            <h3 class="panel-title">Panneau de contrôle</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                @if(count($personnes) > 0 )
                <a href="{{ route('personne.index') }}">
                 <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <p>
                        <span class="number">{{ count($personnes) }}</span>
                            <span class="title">Personnes</span>
                        </p>
                    </div>
                 </div>
                </a>
                @endif
                @if(count($intervenants) > 0)
                  <a href="{{ route('intervenant.index') }}">
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-briefcase"></i></span>
                        <p>
                        <span class="number">{{ count($intervenants) }}</span>
                            <span class="title">Intervenants</span>
                        </p>
                    </div>
                  </div>
                 </a>
                @endif
                @if(count($hotesses) > 0)
                <a href="{{ route('hotesse.index') }}">
                 <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-female"></i></span>
                        <p>
                        <span class="number">{{ count($hotesses) }}</span>
                            <span class="title">hôtesses</span>
                        </p>
                    </div>
                 </div>
                </a>
                @endif
                @if(count($chauffeurs) > 0)
                <a href="{{ route('chauffeur.index') }}">
                 <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="lnr lnr-car"></i></span>
                        <p>
                        <span class="number">{{ count($chauffeurs) }}</span>
                            <span class="title">Chauffeurs</span>
                        </p>
                    </div>
                 </div>
                </a>
                @endif
                @if(count($activites) > 0)
                <a href="{{ route('activite.index') }}">
                  <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                        <span class="number">{{ count($activites) }}</span>
                            <span class="title">Evenements</span>
                        </p>
                    </div>
                 </div>
               </a>
                @endif
                @if(count($affectations) > 0)
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="lnr lnr-exit-up"></i></span>
                        <p>
                        <span class="number">{{ count($affectations) }}</span>
                            <span class="title">Affectations</span>
                        </p>
                    </div>
                </div>
                @endif
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                        <span class="number">3</span>
                            <span class="title">Activites</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                        <span class="number">3</span>
                            <span class="title">Activites</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                        <span class="number">3</span>
                            <span class="title">Activites</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW -->
</div>
@endsection
