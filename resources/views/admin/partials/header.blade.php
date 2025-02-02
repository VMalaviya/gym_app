<div class="header">
    <div class="header-left">
      <a href="#" class="burger-menu"><i data-feather="menu"></i></a>

      
    </div><!-- header-left -->

    <div class="header-right">
      
      <div class="dropdown dropdown-loggeduser">
        <a href="#" class="dropdown-link" data-toggle="dropdown">
          <div class="avatar avatar-sm">
            <img src="{{asset('admin/img/img1.jpg')}}" class="rounded-circle" alt="">
          </div><!-- avatar -->
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-menu-header">
            <div class="media align-items-center">
              <div class="avatar">
                <img src="{{asset('admin/img/img1.jpg')}}" class="rounded-circle" alt="">
              </div><!-- avatar -->
              <div class="media-body mg-l-10">
                <h6>{{Auth::user()->full_name}}</h6>
                {{-- <span>Administrator</span> --}}
              </div>
            </div><!-- media -->
          </div>
          <div class="dropdown-menu-body">
            {{-- <a href="#" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
            <a href="#" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
            <a href="#" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
            <a href="#" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a> --}}
            <a href="{{route('logout.admin')}}" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
          </div>
        </div><!-- dropdown-menu -->
      </div>
    </div><!-- header-right -->
  </div><!-- header -->