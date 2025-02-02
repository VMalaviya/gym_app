<!DOCTYPE html>
<html lang="en">
  
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="GYM Admin">
        <meta name="author" content="GYM">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">

        <title>Admin - Login</title>

        <!-- vendor css -->
        <link href="{{asset('admin/lib/%40fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

        <!-- template css -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    </head>
    <body>

        <div class="signin-panel">
            <svg-to-inline path="{{asset('admin/svg/citywalk.svg')}}" class-Name="svg-bg"></svg-to-inline>

            <div class="signin-sidebar">
                <div class="signin-sidebar-body">
                    <a href="#" class="sidebar-logo mg-b-40"><span>GYM Admin</span></a>
                    <h4 class="signin-title">Welcome back!</h4>
                    <h5 class="signin-subtitle">Please signin to continue.</h5>
                    <form action="{{route('login.admin')}}" method="post">
                        @csrf
                        
                        <div class="signin-form">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email address" value="">
                                @error('email')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror 
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" value="">
                                @error('password')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror 
                            </div>
                            @if(session('loginError'))
                                <p class="text-danger">
                                    {{ session('loginError') }}
                                </p>
                            @endif

                            <div class="form-group d-flex mg-b-0">
                                <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
                            </div>

                        </div>
                    </form>
                </div><!-- signin-sidebar-body -->
            </div><!-- signin-sidebar -->
        </div><!-- signin-panel -->

        <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/lib/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

        <script>
        $(function(){

            'use strict'

            feather.replace();

            new PerfectScrollbar('.signin-sidebar', {
            suppressScrollX: true
            });

        })
        </script>
        <script src="{{asset('admin/js/svg-inline.js')}}"></script>
    </body>

</html>
