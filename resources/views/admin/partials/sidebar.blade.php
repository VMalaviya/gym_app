<div class="sidebar">
    <div class="sidebar-header">
      <div>
        <a href="{{route('dashboard.index')}}" class="sidebar-logo"><span>GYM</span></a>
        <small class="sidebar-logo-headline">{{Auth::user()->full_name}}</small>
      </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
      <ul class="nav nav-sidebar">
        <li class="nav-item">
          <a href="{{route('dashboard.index')}}" class="nav-link active"><i data-feather="box"></i> Dashboard</a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="package"></i>Package</a>
          <nav class="nav nav-sub">
            <a href="{{route('package.index')}}" class="nav-sub-link">Package List</a>
            <a href="{{route('package.create')}}" class="nav-sub-link">Add Package</a>
          </nav>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="credit-card"></i>Purchase</a>
          <nav class="nav nav-sub">
            <a href="#" class="nav-sub-link">Order List</a>
          </nav>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link with-sub"><i data-feather="user"></i> User</a>
          <nav class="nav nav-sub">
            <a href="{{route('user.index')}}" class="nav-sub-link">User List</a>
            <a href="{{route('user.create')}}" class="nav-sub-link">Add Trainer</a>
          </nav>
        </li>
        
      </ul>

      <hr class="mg-t-30 mg-b-25">

      {{-- <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="themes.html" class="nav-link"><i data-feather="aperture"></i> Themes</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i data-feather="help-circle"></i> Documentation</a></li>
      </ul> --}}


    </div><!-- sidebar-body -->
  </div><!-- sidebar -->