@extends('gym.layouts.app')

@section('title', 'About Us')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">About Us</h2>
                </div>
            </div>                      
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->         

<!-- ABOUT ONE SECTION START -->
<div class="section-full p-t120 p-b90">
    <div class="about-section-two">
        <div class="container">
            <div class="section-content">                 
                <div class="row justify-content-center d-flex">
                
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="about-gym-two">
                            <div class="about-gym-two-media"><img src="{{ asset('gym/images/intro-pic2.png') }}" alt="" ></div>
                            <div class="vertical-text"><div class="outline-text">Always Fit</div></div>
                        </div>
                    </div>  
                                          
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="about-section-two-right">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>About US</div>                                            
                            </div>
                            <h2>Built to Bring Best Results</h2>
                            <p>This also meant we needed to provide a learning environment run by
                               experienced and successful coaches. However, our most important goal 
                               was to create a welcoming atmosphere and community in which everyone
                               feels a sense of belonging.
                            </p>
                        </div>
                        <!-- TITLE END-->

                         <div class="about-two-info">
                            <div class="number-icon-block">
                                <div class="numbers">01</div>
                                <div class="wt-icon-box-wraper">
                                    <div class="icon-lg inline-icon m-b10">
                                        <span class="icon-cell  site-text-primary"><i class="flaticon-six-pack"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Full-Body Strength</h5>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="number-icon-block">
                                <div class="numbers">02</div>
                                <div class="wt-icon-box-wraper">
                                    <div class="icon-lg inline-icon m-b10">
                                        <span class="icon-cell  site-text-primary"><i class="flaticon-stationary-bicycle"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte">Lean Machines</h5>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="number-icon-block">
                                <div class="numbers">03</div>                                        
                                <div class="wt-icon-box-wraper">
                                    <div class="icon-lg inline-icon m-b10">
                                        <span class="icon-cell  site-text-primary"><i class="flaticon-exercise"></i></span>
                                    </div>                                            
                                    <div class="icon-content">
                                        <h5 class="wt-tilte">Power Yoga</h5>
                                    
                                    </div>
                                </div>
                            </div>                                        

                         </div>
                        

                        
                        <a href="about-1.html" class="site-button site-btn-effect">Learn More</a> 
                        </div>                                                                
                    </div>
                                                                         

                </div>
            </div>
        </div> 
    </div>
</div>   
<!-- ABOUT ONE SECTION END -->

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

<!-- TESTIMONIAL SECTION START -->
<div class="section-full  p-t120 p-b90 testimonial-1-outer bg-cover" style="background-image:url({{ asset('gym/images/background/bg3.jpg') }});">
    <div class="container">
        <div class="section-content"> 
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer when-bg-dark">
                        <div class="wt-small-separator site-text-primary">
                            <div  class="sep-leaf-left"></div>
                            <div>Fitness expert</div>
                        </div>
                        <h2 class="wt-title">What Our Clients Says?</h2>
                    </div>
                    <!-- TITLE END-->    
                    

                            <div class="testimonial-1-content owl-carousel">
                            
                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic1.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
                                            </div> 

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic2.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
                                            </div> 

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic3.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
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
<!-- TESTIMONIAL SECTION END -->

<!--GET IN TOUCH-->
<div class="section-full bg-white p-tb120 after-bg2-outer" style="background-image:url({{ asset('gym/images/background/bg-dott.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="getintouch-img">
                    <div class="wt-media">
                        <img src="{{ asset('gym/images/client-logo-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">

                <div class="getintouch-content">
                    <h2 class="wt-title m-b30">We are ready to
                    help you to get perfect fitness!</h2>
                    <a href="contact.html" class="site-button site-btn-effect">Get in touch</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!--GET IN TOUCH-->

@endsection