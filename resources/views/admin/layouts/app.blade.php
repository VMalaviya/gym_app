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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicon.png')}}">

    <title>@yield('title', 'Admin - ')</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/%40fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/prismjs/themes/prism-tomorrow.css')}}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    @stack('styles')
  </head>
  <body>

    @include('admin.partials.sidebar')

    <div class="content content-page">

        @include('admin.partials.header')
        
        @hasSection('content')
            @yield('content')
        @else
            <h2>No Content Found!</h2>
        @endif
    </div><!-- content -->

    <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/lib/jqueryui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/lib/prismjs/prism.js')}}"></script>
    <script src="{{asset('admin/lib/js-cookie/js.cookie.js')}}"></script>
    {{-- <script src="{{asset('admin/lib/jquery.flot/jquery.flot.js')}}"></script> --}}
    {{-- <script src="{{asset('admin/lib/jquery.flot/jquery.flot.stack.js')}}"></script> --}}
    {{-- <script src="{{asset('admin/lib/jquery.flot/jquery.flot.resize.js')}}"></script> --}}

    <script src="{{asset('admin/js/gym.js')}}"></script>
    <script src="{{asset('admin/js/flot.sampledata.js')}}"></script>
    @stack('scripts')
    <script>
      $(function(){
        // card-calendar-one widget
        $('#datepicker1').datepicker({
          showOtherMonths: true
        });

      })
    </script>

  </body>

</html>
