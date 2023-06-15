@extends('layouts.admin')
@section('content')
   <div class="card" style="background-color:silver;">
   	<div class="card-header" style="background-color:silver;">
   		<center><h3>Users page</h3></center>
   	</div>
      <center>
      <div class="table-responsive" >
       <!--    @if(Session::has('success'))
                                <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                               <p class="text-primary"> {{Session::get('success')}} </p>
                                  </div>
                              @endif  -->
                           
         <table class="table" style="width: 70%;margin-left: 19%;border: 2px solid darkcyan;background-color: white;">
            <thead style="border: 2px solid darkcyan;">
               <tr style="border: 2px solid darkcyan;">
                  <th><h6>id</h6></th>
                  <th><h6>name</h6></th>
                  <th><h6>email</h6></th>
                  <th colspan="2"><h5>action</h5></th>
               </tr>
            </thead>
            <tbody>
               @foreach($users as $user)
               <tr>
                  <td><h6>{{$user->id}}</h6></td>
                   <td><h6>{{$user->name}}</h6></td>
                           <td><h6>{{$user->email}}</h6></td>
                     <td>

                <form  action="admin/users/{{$user->id}}" method="post" enctype="multipart/form-data" style="display: inline;">
              {{csrf_field()}}
        {{method_field('DELETE')}} 
<button
 class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete this user')"> Delete </button> 
</form>

                     </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      </center>
   </div>
   @endsection