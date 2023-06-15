@extends('layouts.admin')

@section('title')
   Orders
@endsection

@section('content')
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               
                     <div class="card">
                        <div class="card-header " >

                           <div class="card-body">
                               <h4 style="margin-left: 19%;">Orders History</h4>    
    <a href="{{url('orders')}}" class="btn btn-warning float-end" >New orders</a>
              <table class="table table-border" style="width: 70%;margin-left: 19%;border: 2px solid darkcyan;background-color: white;">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>MY Number</th>
                        <th>The required amount</th>
                        <th>Status</th>
                     </tr> 
                  </thead>
                  <tbody>
                    @foreach($orders as $item)
                      <tr>
                             <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->number}} $</td>
                          <td>{{$item->status == '0' ? 'pending' : 'completed'}}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table> 
              </div> 
                        </div>
                     </div> 
           
            </div>
         </div>
      </div>

   @endsection