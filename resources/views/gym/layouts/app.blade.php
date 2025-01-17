<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    {{-- <link rel="icon" href="images/favicon.html" type="image/x-icon" /> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('gym/images/favicon.png') }}" />
    
    <!-- PAGE TITLE HERE -->
    <title>GYM - @yield('title', 'Join Today')</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/font-awesome.min.css') }}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/bootstrap-select.min.css') }}">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/magnific-popup.min.css') }}">
   
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/style.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/flaticon.min.css') }}">

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('gym/css/skin-1.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/switcher.css') }}">    

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gym/css/navigation.css') }}">
    @stack('styles')
</head>

<body>

	<div class="page-wraper">
     
      <!-- HEADER START -->
        @include('gym.partials.header')
       <!-- HEADER END -->
      
        <!-- CONTENT START -->
        <div class="page-content">

            @hasSection('content')
                @yield('content')
            @else
                <h2>No Content Found!</h2>
            @endif

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        @include('gym.partials.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>

    <!-- LOADING AREA START ===== -->
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="wrapper">
                    <div class="cssload-loader"></div>
                </div>
            </div>
        </div>
    <!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('gym/js/jquery-2.2.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('gym/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('gym/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('gym/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('gym/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('gym/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('gym/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('gym/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('gym/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('gym/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('gym/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('gym/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('gym/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('gym/js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('gym/js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('gym/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('gym/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="{{ asset('gym/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('gym/js/rev-script-1.js') }}"></script>

@stack('scripts')
</body>

</html>
