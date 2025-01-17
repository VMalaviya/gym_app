@extends('gym.layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Contact us</h2>
                </div>
            </div>                       
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- CONTACT FORM -->
<div class="section-full  p-t120 p-b120" style="background-image:url({{ asset('gym/images/background/bg-dott.png') }})">   
<div class="section-content">
    <div class="container">
        <div class="contact-one">
            <!-- CONTACT FORM-->
            <div class="row no-gutters d-flex justify-content-center flex-wrap">
                
                <div class="col-lg-5 col-md-12 site-bg-primary">

                    <div class="contact-info p-a50">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <h3 class="wt-title">Get In Touch</h3>
                            <p>It is a long established fact that a reader will be by the readable of a page when looking at its layout. </p>
                        </div>
                        <!-- TITLE END--> 
                        
                        <div class="contact-info-section">  
                                
                                <div class="c-info-column">
                                    <span class="m-t0">Address info</span>
                                    <p>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                </div>  

                                <div class="c-info-column">
                                    <span class="m-t0">Phone number</span>
                                    <p>(+291) 0987 654 321</p>
                                </div>

                                <div class="c-info-column">
                                    <span class="m-t0">Email address</span>
                                    <p>thewebmax@gmail.com</p>
                                </div>


                                <div class="c-info-column">
                                    <span class="m-t0">Opening Hours</span>
                                    <ul class="list-unstyled m-b0">
                                        <li>Monday-Sunday: 07:00 - 22:00</li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-lg-7 col-md-12 site-bg-white">
                    <div class="contact-form-outer p-a50 ">
                        <form  class="cons-contact-form" method="post" action="#">

                            
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h3 class="wt-title m-b30">Contact Form</h3>
                            </div>
                            <!-- TITLE END-->                                        
                                                                    
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>                                
                
            </div>
        </div>
    
    </div>
</div>
</div>

<!-- GOOGLE MAP -->
<div class="section-full bg-white">   
    <div class="gmap-outline">
        <div id="gmap_canvas2" class="google-map"></div>
    </div>
</div>  

@endsection

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
<script src="{{ asset('gym/js/map.script.js') }}"></script>
@endpush