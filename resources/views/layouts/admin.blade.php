<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('admin/css/argon-dashboard.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="{{ asset('admin/js/42d5adcbca.js')}}"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body style="background-color: oldlace;">
   <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('layouts.inc.sidebar')
    
    <main class="main-content position-relative border-radius-lg ">
      @include('layouts.inc.navbar')
     </main>
     
      <div class="container-fluid py-4" style="background-color:silver;">
    
        @yield('content')

      </div>
      @include('layouts.inc.footer')

     <!--   Core JS Files   -->
     <script src="{{ asset('admin/js/jquery-3.6.1.min.js')}}"></script>
  <script src="{{ asset('admin/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('admin/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('admin/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{ asset('admin/js/custom.js') }}" ></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
 <!--  sweet alert -->
<!--   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
   <script src="{{ asset('admin/js/sweetalert/sweetalert.min.js')}}"></script>
  <script src="sweetalert2.min.js"></script>
  @if(Session('status'))
  <script type="text/javascript">swal(" {{session('status')}} ");</script>
  
  @endif 
<!--  sweet alert -->
  @yield('scripts')
</body>
</html>
