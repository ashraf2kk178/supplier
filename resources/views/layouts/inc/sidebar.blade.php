<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start  " id="sidenav-main" style="background-color: blue;margin-left: ">
    <div class="sidenav-header" style="background-color: DeepPink;">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
     
        <span class="ms-1 font-weight-bold">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" aria-current="true">
      <ul class="list-group">
        <li class="list-group-item  {{Request::is('dashboard') ? 'active':''}}">
          <a class="nav-link active" href="{{url('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
         <hr class="horizontal dark mt-0">
         <li class="nav-item  {{Request::is('orders') ? 'active':''}}">
          <a class="nav-link " href="{{url('orders')}}">
            <p>Show Orders</p>
          </a>
        </li>
          <hr class="horizontal dark mt-0">
        <li class="nav-item  {{Request::is('users') ? 'active':''}}">
          <a class="nav-link " href="{{url('users')}}">
            <i class="metarial-icons">persons</i>
            <p>Show Users</p>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>