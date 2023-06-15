@extends('layouts.front')

@section('title')

Welcome in Our Services

@endsection

@section('content')
            
      <div class="container py-5">
         <div class="row">
            <div class="col-md-12">
              <div class="card">
                 <div class="card-header">
                     <h4>My Wallet</h4>
                 </div> 
                 <div class="card-body">
                       <table class="table table-border">
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

@endsection            