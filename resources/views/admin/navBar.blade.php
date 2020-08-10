    <nav class="navbar navbar-expand fixed-top">
      <div class="navbar-brand d-none d-lg-block">
        <a href="dashboard" style="color: #fff;">
          {{-- <img src="admin/assets/images/logo-white.png" alt="Klorofil Pro Logo" class="img-fluid logo"> --}}
          MedBook
        </a>
      </div>
      <div class="container-fluid p-0">
        <button id="tour-fullwidth" type="button" class="btn btn-default btn-toggle-fullwidth"><i class="ti-menu"></i></button>
        <form class="form-inline search-form mr-auto d-none d-sm-block">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <div class="input-group-append">
              <button type="button" class="btn"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav align-items-center">
      
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('admin/assets/images/user2.png') }}" class="user-picture" alt="Avatar"> <span>Admin</span></a>
              <ul class="dropdown-menu dropdown-menu-right logged-user-menu">
                <li><a href="page-lockscreen.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>