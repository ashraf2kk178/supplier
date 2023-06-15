@extends('layouts.admin')

@section('title')
   View Orders
@endsection

@section('content')
       
      <div class="container" >
         <div class="row">
            <div class="col-md-12">
              <div class="card" style="margin-left:190px;">
                 <div class="card-header" style="background-color: skyblue;">
                     <h4>My Orders View Details</h4>
               <a href="{{url('orders')}}" class="btn btn-warning float-end">Back to orders</a>
                 </div> 
                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details" style="width: 250px;margin-right: 100px;">
                            <label> His Name</label>
                            <div class="border ">{{$orders->fname}}</div>
                            <label> His number</label>
                            <div class="border ">{{$orders->phone}}</div>
                            <label> HisE-mail</label>
                            <div class="border ">{{$orders->email}}</div>
                            <label>His Order charge</label>
                            <div class="border ">{{$orders->number}}</div>
                        </div>
                        <div class="col-md-6">  
              <h4 class="float-end">Grand total : {{$orders->total_price}} LE</h4>
              <div class="mt-5 px-2">
              <h5>Order Status</h5>
              <form action="{{url('update.order/'.$orders->id)}}" method="POST">
                  {{csrf_field()}}
        {{method_field('put')}}
              <select class="form-select" name="order-status">
     <option {{$orders->status=='0' ? 'selected': ''}} value="0">pending</option>
     <option {{$orders->status=='1' ? 'selected': ''}} value="1">completed</option>
              </select>
      <button type="submit" class="btn btn-primary mt-3 float-end">Update</button>

              </div>
                        </div>
                    </div>
                
                 </div>
              </div>

            </div> 
         </div> 
      </div>
         
   @endsection