<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>@yield('title')</title>
<!--   bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('lib')}}/bs5/bootstrap.min.css"/>
  <!--     jqueru -->
<script type="text/javascript" src="{{asset('lib')}}/jquery-3.6.0.min.js"></script>
<!--   bs5 js -->
<script type="text/javascript" src="{{asset('lib')}}/bs5/bootstrap.bundle.min.js"></script>

</head>
<body>
<h2>Welcome in our website</h2>
      @yield('content')
           
       </main>

</body>
</html>
