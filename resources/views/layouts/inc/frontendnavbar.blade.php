    <header class="main_menu home_menu  " style="background-color: DarkSlateGray">
      
<nav class="navbar navbar-expand-lg bg-DarkSlateGray" style="background-color: DarkSlateGray;width: 100%;">
  <div class="container-fluid">
    <h3> <a class="navbar-brand" href="{{url('/')}}">Welcome</a>  </h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse"  > -->
      <ul class="navbar-nav ms-auto" style="margin-left: 70px;">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a> 
        </li>

              <li class="nav-item">
         <a class="nav-link" href="{{ url('my-orders') }}" aria-current="page" >My Orders
          <!-- <i class="fa fa-bell"></i><span class="order-ccount">0</span> -->
      </a> 
                 </li>

       <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                       @else
                           <!--  <li class="nav-item ">
                               <a id="navbar" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li> -->
                                               <li class="nav-item">
                   <a class="nav-link" > {{ Auth::user()->name }}</a>
                                                        </li>

             
                            <li class="nav-item ">
          <a class="nav-link " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                               </li>
                        @endguest

      </ul>
      <form class="d-flex float-end" role="search" action="{{url('searchproduct')}}" method="POST" >
        @csrf
        <input class="form-control me-2" id="search_product" type="search" required placeholder="Search"
         name="product_name">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
<!--     </div> -->
  </div>
</nav>

</header>