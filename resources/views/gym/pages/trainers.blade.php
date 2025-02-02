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
                @foreach ($trainers as $trainer)
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-2">
                        
                        <div class="wt-media">
                            {{-- <img src="{{ asset('gym/images/team/pic1.jpg') }}" alt=""> --}}
                            <img src="{{ asset($trainer->user_photo) }}" alt="trainers">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <h3 class="m-t0 team-name">{{$trainer->full_name}}</h3>                                            
                                <span class="team-position">{{$trainer->user_expert_in}}</span>
                            </div>
                            {{-- <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                         --}}
                        </div>
                
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>      
            
    </div>
</div>   
<!-- OUR TEAM SECTION END -->

@endsection