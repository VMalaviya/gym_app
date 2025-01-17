@extends('gym.layouts.app')

@section('title', 'Trainers')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Trainers</h2>
                </div>
            </div>                      
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- OUR TEAM START -->
<div class="section-full p-t120 p-b90 site-bg-gray-light">
    
    <div class="container">
    
        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Our Trainer</div>
                        </div>
                        <h2 class="wt-title">We have Expert Team Members</h2>
                    </div>
                    <!-- TITLE END-->
                </div>

                
                <div class="col-lg-6 col-md-12 wt-separator-two-part-right">
                    <p>Our event unites athletic professionals and enthusiasts to pursue a great goal. We 
                    create and promote initiatives that enable people to become and remain physically 
                    active regardless and challenge inequality of access to physical activity.</p>
                    <a href="about-1.html" class="site-button site-btn-effect">View All Trainer</a>
                </div>
                                            
            </div>
        </div>
                
        <div class="section-content">
            <div class="team3-outer">
                <div class="row justify-content-center"> 

                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-3">
                                    
                                    <div class="wt-media">
                                        <img src="{{ asset('gym/images/team3/pic1.jpg') }}" alt="">
                                    </div>                                   

                                    <div class="wt-info">
                                        <div class="team-detail">
                                            <h3 class="m-t0 team-name">Ronan</h3>                                            
                                            <span class="team-position">Caradio Trainer</span>                                        
                                        </div>
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>                                        
                                    </div>
                            
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-3">
                                    
                                    <div class="wt-media">
                                        <img src="{{ asset('gym/images/team3/pic2.jpg') }}" alt="">
                                    </div>                                   

                                    <div class="wt-info">
                                        <div class="team-detail">
                                            <h3 class="m-t0 team-name">Brayden</h3>
                                            <span class="team-position">Boxing Trainer</span>
                                        </div>
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>                                        
                                    </div>
                            
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-3">
                                    
                                    <div class="wt-media">
                                        <img src="{{ asset('gym/images/team3/pic3.jpg') }}" alt="">
                                    </div>                                   

                                    <div class="wt-info">
                                        <div class="team-detail">
                                            <h3 class="m-t0 team-name">Marco</h3>                                            
                                            <span class="team-position">Dumbbell Trainer</span>                                     
                                        </div>
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>                                        
                                    </div>
                            
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-3">
                                    
                                    <div class="wt-media">
                                        <img src="{{ asset('gym/images/team3/pic4.jpg') }}" alt="">
                                    </div>                                   

                                    <div class="wt-info">
                                        <div class="team-detail">
                                            <h3 class="m-t0 team-name">Devin</h3>                                            
                                            <span class="team-position">Fitness Trainer</span>                                        
                                        </div>
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>                                        
                                    </div>
                            
                                </div>
                            </div>                                                                                
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-12 m-b30">

                        <div class="wt-team-3">
                            
                            <div class="wt-media">
                                <img src="{{ asset('gym/images/team3/pic5.jpg') }}" alt="">
                            </div>                                   

                            <div class="wt-info">
                                <div class="team-detail">
                                    <h3 class="m-t0 team-name">Antonio</h3>                                            
                                    <span class="team-position">Bodybuilding Coach</span>                                        
                                </div>
                                <div class="team-social-center">
                                    <ul class="team-social-bar">
                                        <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>                                        
                            </div>
                    
                        </div>
                    
                    </div>

                                                

                </div>

            </div>
        </div>      
            
    </div>
</div>   
<!-- OUR TEAM SECTION END --> 

<!-- OUR TEAM START -->
<div class="section-full p-t120 p-b90 bg-cover" style="background-image:url({{ asset('gym/images/background/bg-1-1.jpg') }})">
    
    <div class="container">
    
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer text-center text-white">
            <div class="wt-small-separator site-text-secondry">
                <div  class="sep-leaf-left"></div>
                <div>Our Trainer</div>
            </div>
            <h2>Team of Expert Coaches</h2>
        </div>
        <!-- TITLE END-->
                
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-2">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic1.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <h3 class="m-t0 team-name">William Dixon</h3>                                            
                                <span class="team-position">Bodybuilding Coach</span>                                        
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-2">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic2.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <h3 class="m-t0 team-name">Dominic Snyder</h3>
                                <span class="team-position">Body Builder Trainer</span>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-2">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic3.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <h3 class="m-t0 team-name">Virgil Cook</h3>                                            
                                <span class="team-position">Bodybuilding Coach</span>                                     
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>                                                        
                
            </div>
        </div>      
            
    </div>
</div>   
<!-- OUR TEAM SECTION END -->


<!-- OUR TEAM START -->
<div class="section-full p-t120 p-b90 site-bg-gray-light">
    
    <div class="container">
    
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-secondry">
                <div  class="sep-leaf-left"></div>
                <div>Our Trainer</div>
            </div>
            <h2>Team of Expert Coaches</h2>
        </div>
        <!-- TITLE END-->
                
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic1.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Bodybuilding Coach</span>                                        
                                <h3 class="m-t0 team-name">William Dixon</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic2.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Body Builder Trainer</span>                                        
                                <h3 class="m-t0 team-name">Dominic Snyder</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic3.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Bodybuilding Coach</span>                                        
                                <h3 class="m-t0 team-name">Virgil Cook</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>                                                        
                
            </div>
        </div>      
            
    </div>
</div>   
<!-- OUR TEAM SECTION END -->

@endsection