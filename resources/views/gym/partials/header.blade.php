<!-- HEADER START -->
<header class="site-header header-style-1 mobile-sider-drawer-menu">
            
    <div class="top-bar site-bg-gray-light">
        <div class="container">

                <div class="d-flex justify-content-between">
                    <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                        <ul class="wt-topbar-left-info">
                            {{-- <li>Mon - Sat : 9am to 7pm</li> --}}
                            {{-- <li>+91 1234567890</li> | 
                            <li>contact@gmail.com</li> --}}
                            <li>Welcome to GYM</li>
                        </ul>
                    </div>
                    
                    <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                        <ul class="wt-topbar-right-info">
                            <li> <a href="{{ route('gym.pages.login') }}">Login</a> </li>
                            <li><a href="{{ route('gym.pages.register') }}">Register</a></li>
                        </ul> 
                    </div>
                </div>
               

        </div>
    </div>  
            

        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">  
                                
                <div class="container clearfix"> 
            
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                            <img src="{{ asset('gym/images/logo-dark.png') }}" alt="">
                            </a>
                        </div>
                    </div>  
                    
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button> 

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                
                        <ul class=" nav navbar-nav">
                            <li class="active has-child">
                                <a href="{{ route('gym.pages.home') }}">Home</a>
                                <div class="fa fa-angle-right submenu-toogle"></div> 
                            </li>
                            
                            <li class="has-child">
                                <a href="{{ route('gym.pages.about') }}">About</a>
                                <div class="fa fa-angle-right submenu-toogle"></div>
                            </li>                                    
                            <li class="has-child">
                                <a href="{{ route('gym.pages.gallery') }}">Gallery</a>
                                <div class="fa fa-angle-right submenu-toogle"></div>
                            </li>
                            <li class="has-child">
                                <a href="{{ route('gym.pages.classes') }}">Classes</a>
                                <div class="fa fa-angle-right submenu-toogle"></div>
                            </li>
                            <li class="has-child">
                                <a href="javascript:;">Pages</a><div class="fa fa-angle-right submenu-toogle"></div>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('gym.pages.services') }}">Services</a></li>
                                    <li><a href="{{ route('gym.pages.trainers') }}">Trainer</a></li>                                            
                                    <li><a href="{{ route('gym.pages.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('gym.pages.pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('gym.pages.contact') }}">Contact</a></li>                                                                                        
                                </ul>
                            </li>
                    
                        </ul>

                    </div>
                    
                    <!-- Header Right Section-->
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="ap-btn-outer">
                                <a href="{{ route('gym.pages.contact') }}" class="ap-btn from-top">Appointment</a>
                            </div>                                
                        </div>                                
                    </div>                             
                
                                                  
                    
                </div>    
            
            
            </div>
        </div>

    
</header>
<!-- HEADER END -->