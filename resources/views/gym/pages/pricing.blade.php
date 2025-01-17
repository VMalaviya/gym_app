@extends('gym.layouts.app')

@section('title', 'Pricing')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Pricing</h2>
                </div>
            </div>                      
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->


<!-- PRICING TABLE SECTION START -->
{{-- <div class="section-full p-t120" style="background-image:url({{ asset('gym/images/background/bg-dott.png') }});">

<div class="container">

    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer text-center text-white">
        <div class="wt-small-separator site-text-secondry">
            <div  class="sep-leaf-left"></div>
            <div>Pricing</div>
        </div>
        <h2>Our Pricing Plan</h2>
    </div>
    <!-- TITLE END-->
            
    <div class="section-content">
        <div class="pricing-block-outer">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">

                </div>

                <div class="col-lg-3 col-md-6 site-bg-primary">
                    <div class="pricing-table-1">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Standard
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$100</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 site-bg-primary">
                    <div class="pricing-table-1">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Professional
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$150</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 site-bg-primary">
                    <div class="pricing-table-1">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Ultimate
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$200</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>                                

            </div>
        </div>
    </div>      
        
</div>
</div>   
<!-- PRICING TABLE SECTION END -->   --}}


<!-- PRICING TABLE SECTION START -->
<div class="section-full p-t120 p-b90 site-bg-gray-light">

<div class="container">

    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-secondry">
            <div  class="sep-leaf-left"></div>
            <div>Pricing</div>
        </div>
        <h2>Our Pricing Plan</h2>
    </div>
    <!-- TITLE END-->
            
    <div class="section-content">
        <div class="pricing-block-outer2">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="pricing-table-2">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Standard
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$100</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="pricing-table-2">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Professional
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$150</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="pricing-table-2">
                        <div class="p-table-title">
                            <h4 class="wt-title">
                                Ultimate
                            </h4>
                        </div>
                        <div class="p-table-list">
                            <ul>
                                <li>Service Locker Room</li>
                                <li>Personal Trainer</li>
                                <li>Morning Slot</li>
                                <li>Yoga Classes</li>
                                <li>Health Checkup</li>
                                <li>Fitness Assessment</li>
                            </ul>
                        </div>
                        <div class="p-table-price">
                            <span>$200</span>
                            <p>Per/month</p>
                        </div>
                        <div class="p-table-btn">
                            <a href="about-1.html" class="site-button-secondry site-btn-effect">Purchase Now</a>
                        </div>
                    </div>
                </div>                                

            </div>
        </div>

    </div>      
        
</div>
</div>   
<!-- PRICING TABLE SECTION END -->

@endsection