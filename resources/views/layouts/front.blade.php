<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap.bundle.min.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Font Awesome Icons -->
     <script src="{{ asset('frontend/js/42d5adcbca.js')}}"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!--   google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <style type="text/css">
     a{
      text-decoration: none !important;
     }
   </style>
</head>
<body style="background-color: oldlace;">
   <div class="min-height-300 bg-primary position-absolute w-100"></div>

     @include('layouts.inc.frontendnavbar')

      <div class="container-fluid py-4" style="background-color:silver;">
    
        @yield('content')

      </div>
   
     <div >
       <a href="https://wa.me/1019819243?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
         <img src="{{asset('assets/images/whatsapp.jpg')}}" alt="whatsapp-chat"class="whatsapp-chat">
       </a>
     </div>

     <!--   Core JS Files   -->

  <script src="{{ asset('frontend/js/jquery-3.6.1.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/datatables-simple-demo.js')}}"></script>
   <script src="{{ asset('frontend/js/custom.js') }}" ></script>
   <script src="{{ asset('frontend/js/checkout.js') }}" ></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/638a0da0daff0e1306da9ef0/1gj9kafgr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   
     <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
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
 <!--  sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="{{ asset('admin/js/sweetalert/sweetalert.min.js')}}"></script>

  <script src="sweetalert2.min.js"></script>
  @if(Session('status'))
  <script type="text/javascript">swal(" {{session('status')}} ");</script>
  
  @endif 
<!--  sweet alert -->
  @yield('scripts')
</body>
</html>
