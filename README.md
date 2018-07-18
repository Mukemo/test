# [x] conceive a registration and login page for all admins
# [x] processing to data collection (C.R.U.D.)
# [] processing to participation form


#<!-- <a href="{{ route('admin.voir',['id' => $user->id ])}}" class="btn btn-info btn-sm"><span class="lnr lnr-eye"></span>  Voir</a>
@if(!($user->super_admin))
   <a href="{{ route('admin.delete',[ 'id' => $user->id ])}}" class="btn btn-danger btn-sm"><span class="lnr lnr-trash"></span> Effacer</a>
@endif -->#
