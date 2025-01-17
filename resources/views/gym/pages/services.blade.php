@extends('gym.layouts.app')

@section('title', 'Services')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Services</h2>
                </div>
            </div>                    
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->         

<!-- PROJECT SECTION START -->
<div class="section-full  p-t120 p-b120">
    <div class="container-fluid">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div class="sep-leaf-left"></div>
                <div>Find your exercise</div>
            </div>
            <h2>New Exclusive Workouts</h2>
        </div>
        <!-- TITLE END-->

        <div class="section-content">     
            <div class="owl-carousel workout-slider1  workout-box-style1-outer owl-btn-top-right">
                <!-- COLUMNS 1 --> 
                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>01</span>
                                    Boxing
                                </div>
                                <h3 class="workout-title-large">Boxing Training Session</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/1.jpg') }}" alt="">
                            </div>
                    </div>
                </div>
                <!-- COLUMNS 2 --> 
                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>02</span>
                                    Cardio Training
                                </div>
                                <h3 class="workout-title-large">Cardio Training Session</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/2.jpg') }}" alt="">
                            </div>
                    </div>
                </div>                           
                                        
                <!-- COLUMNS 3 --> 

                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>03</span>
                                    Bodybuilding
                                </div>
                                <h3 class="workout-title-large">Bodybuilding Training Session</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/3.jpg') }}" alt="">
                            </div>
                    </div>
                </div>                           
                
                <!-- COLUMNS 4 --> 

                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>04</span>
                                    Bodybuilding
                                </div>
                                <h3 class="workout-title-large">Psychology of Training</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/4.jpg') }}" alt="">
                            </div>
                    </div>
                </div>                           
                                        
                <!-- COLUMNS 5 --> 

                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>05</span>
                                    Self Defence
                                </div>
                                <h3 class="workout-title-large">Practical Self Defence</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/5.jpg') }}" alt="">
                            </div>
                    </div>
                </div>                           
                                        
                <!-- COLUMNS 6 --> 

                <div class="item ">
                    <div class="workout-box-style1">
                            <div class="workout-content">
                                <div class="workout-title site-text-primary">
                                    <span>06</span>
                                    Fitness
                                </div>
                                <h3 class="workout-title-large">Fitness Training For man</h3>
                            </div>
                            <div class="workout-media">
                                <img src="{{ asset('gym/images/workout/6.jpg') }}" alt="">
                            </div>
                    </div>
                </div>                           
                                        
            
                

            </div>
        </div>
    </div>

</div>   
<!-- PROJECT CHOOSE SECTION END -->              

<!-- CLASSES SECTION -->
<div class="section-full site-bg-gray-light p-t120 p-b90">
    <div class="container">
        <div class="wt-tabs tabs-default">
            <div class="wt-separator-two-part">
                <div class="row wt-separator-two-part-row">
                    <div class="col-lg-6 col-md-12 wt-separator-two-part-left">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>Find your exercise</div>
                            </div>
                            <h2>New Exclusive Workouts</h2>
                        </div>
                        <!-- TITLE END-->
                    </div>

                    
                    <div class="col-lg-6 col-md-12 wt-separator-two-part-right">
                        <div class="tabs-default-nav">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a data-toggle="tab" href="#men" class="active">
                                        <div class="wt-icon-box-wraper left">
                                            <span class="icon-md p-t10">
                                                <i class="flaticon-muscle-1"></i>
                                            </span>
                                            <div class="icon-content">
                                                <span>For</span>
                                                <span>Men</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#girl">
                                        <div class="wt-icon-box-wraper left">
                                            <span class="icon-md p-t10">
                                                <i class="flaticon-pilates"></i>
                                            </span>
                                            <div class="icon-content">
                                                <span>For</span>
                                                <span>girl</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                                
                </div>
            </div>  

            <!-- TAB DEFAULT -->
            <div class="section-content">


                <div class="tab-content">
                
                    <div id="men" class="tab-pane active">
                        <div class="row justify-content-center">

                            <!--Block 1-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m1.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>01</span>
                                        </div>
                                        <h3 class="workout-title-large">The Knockout Workouts </h3>
                                    </div>
                            </div>
                            </div>

                            <!--Block 2-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m2.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>02</span>
                                        </div>
                                        <h3 class="workout-title-large">Cardio Training Session</h3>
                                    </div>
                            </div>
                            </div>
                            
                            

                            <!--Block 3-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m3.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>03</span>
                                        </div>
                                        <h3 class="workout-title-large">Bodybuilding Training Session</h3>
                                    </div>
                            </div>
                            </div>



                            <!--Block 4-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m4.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>04</span>
                                        </div>
                                        <h3 class="workout-title-large">Psychology of Training</h3>
                                    </div>
                            </div>
                            </div>
                            
                            <!--Block 5-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m5.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>05</span>
                                        </div>
                                        <h3 class="workout-title-large">Practical Self Defence</h3>
                                    </div>
                            </div>
                            </div>
                            
                            <!--Block 6-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/m6.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>06</span>
                                        </div>
                                        <h3 class="workout-title-large">Fitness Training For man</h3>
                                    </div>
                            </div>
                            </div>                                        


                        </div>
                    </div>
                    
                    <div id="girl" class="tab-pane">
                        <div class="row justify-content-center">

                            <!--Block 1-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g1.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>01</span>
                                        </div>
                                        <h3 class="workout-title-large">Psychology of Training</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Block 2-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g2.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>02</span>
                                        </div>
                                        <h3 class="workout-title-large">Practical Self Defence</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Block 3-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g3.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>03</span>
                                        </div>
                                        <h3 class="workout-title-large">Fitness Training For Girl</h3>
                                    </div>
                                </div>
                            </div>                                          

                            <!--Block 4-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g4.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>04</span>
                                        </div>
                                        <h3 class="workout-title-large">Strength Training</h3>
                                    </div>
                                </div>
                            </div>

                            <!--Block 5-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g5.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>05</span>
                                        </div>
                                        <h3 class="workout-title-large">Boxing For Girl</h3>
                                    </div>
                                </div>
                            </div>

                            <!--Block 6-->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="workout-box-style2">
                                    <div class="workout-media">
                                        <img src="{{ asset('gym/images/workout2/g6.jpg') }}" alt="">
                                    </div>
                                    <div class="workout-content">
                                        <div class="workout-title site-text-primary">
                                            <span>06</span>
                                        </div>
                                        <h3 class="workout-title-large">Yoga</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>   
<!-- CLASSES SECTION END -->

@endsection