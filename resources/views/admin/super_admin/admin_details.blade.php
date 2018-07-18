@extends('layouts.master')
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
                 <h3 class="name" style="color:rgba(0,0,0,.8);">{{ $user->nom .' '.$user->postnom.' '.$user->prenom }}</h3>
               </div>
               <div class="profile-stat" style="background:rgb(222,0,0);">
                 <div class="row">
                   <div class="col-md-4 stat-item">

                   </div>
                   <div class="col-md-4 stat-item text-center">
                     status
                     @if($user->super_admin)
                       <span>Super Admin</span>
                     @else
                       <span>Staff Admin</span>
                     @endif
                   </div>
                   <div class="col-md-4 stat-item">

                   </div>

                 </div>
               </div>
             </div>
             <!-- END PROFILE HEADER -->
             <!-- PROFILE DETAIL -->
             <div class="profile-detail">
               <div class="profile-info">
                 <h4 class="heading">Les informations basiques</h4>
                 <ul class="list-unstyled list-justify">
                   <li>Fonction <span>{{ $user->profile->function }}</span></li>
                   @if( $user->profile->no_telephone)
                     <li>Mobile <span>+(243) {{ $user->profile->no_telephone }}</span></li>
                   @endif
                   <li>Email <span>{{ $user->email }}</span></li>
                   <li>Adresse <span>{{ $user->profile->adresse }}</span></li>
                 </ul>
               </div>
               <!-- <div class="profile-info">
                 <h4 class="heading">Social</h4>
                 <ul class="list-inline social-icons">
                   <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                 </ul>
               </div> -->
               <div class="profile-info">
                 <h4 class="heading">A propos</h4>
                 <p>{{ $user->profile->propos }}</p>
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
