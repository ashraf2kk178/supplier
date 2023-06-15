@extends('layouts.front')

@section('title')

Welcome TO our Website

@endsection

@section('content')

@include('layouts.inc.slider')
   <div class="py-5">
        <center><h1 class="text-muted">welcome in Our Website</h1></center>
      <div class="container" style="background-color: Gainsboro">
      <h2>Our Services</h2>

      </div>
     <div class="card" style="background-color:silver;">
    <div class="card-header" style="background-color:silver;">
        <center><h3>Charge your wallet Here</h3>
       <form method="post" action="{{url('insert-wallet')}}" enctype="multipart/form-data" class="form-control" style="box-shadow: 10px;">
            @csrf
             <div class="col-md-12">
                <label>MY name</label>
<input type="text" name="name"  class="form-control" placeholder="Name" required> 
         </div>
          <div class="col-md-12">
                <label>MY email</label>
<input type="email" name="email"  class="form-control" placeholder="email" required> 
         </div>
         <div class="col-md-12">
                <label>MY Number</label>
<input type="number" name="phone"  class="form-control" placeholder="my number" required> 
         </div>
            <div class="col-md-12">
                <label>Charge my wallet</label>
<input type="number" name="number" min="10" value="10" max="100" class="form-control" required> $
         </div>
         <div class="col-md-12">
                  <button type="submit"  class="form-control btn btn-primary" >submit</button>
               </div>
        </form>
        </center>

    </div>
</div>
   </div>
@endsection

@section('scripts')
 <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript">

   $('.feature-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js')}}"></script>
    <script>
      $(document).ready(function () {
// $.ajaxSetup({
//                                 headers: {
//                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                                          }
//                                      });
    var availableTags = [];
    $.ajax({
      method:"GET",
      url: "/product-list",
      success: function(response) {
          // console.log(response);
          startAutoComplete(response);
      }
    });
    function startAutoComplete(availableTags)
    {
    $( "#search_product" ).autocomplete({
      source: availableTags
    });
     }
     });
  </script>
<script src="{{ asset('admin/js/sweetalert/sweetalert.min.js')}}"></script>
  <script src="sweetalert2.min.js"></script>

@endsection
