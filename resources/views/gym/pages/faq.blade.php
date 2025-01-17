@extends('gym.layouts.app')

@section('title', 'FAQ')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">FAQ</h2>
                </div>
            </div>                      
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- FAQ SECTION START -->
<div class="section-full p-t120 p-b90 bg-white">
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer text-center text-white">
            <div class="wt-small-separator site-text-secondry">
                <div  class="sep-leaf-left"></div>
                <div>FAQ's</div>
            </div>
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        <!-- TITLE END-->                        

        <div class="section-content">                           
            <!-- Accordian -->
            <div class="wt-accordion back-bg-gray faq-accorfion m-b30" id="accordion5">
                    
                <div class="panel wt-panel">
                    <div class="acod-head  acc-actives">
                            <h3 class="acod-title">
                            <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" > 
                                How to raise over all fitness level?

                                <span class="indicator"><i class="fa fa-plus"></i></span>
                            </a>
                            </h3>
                    </div>
                    <div id="collapseOne5" class="acod-body collapse show">
                        <div class="acod-content">
                            <p>
                                Don’t be nervous for your first Brazilian Jiu-Jitsu class.
                                The class participants might seem tight knit, but BJJ practitioners are a friendly bunch.
                                You will soon be one of them. Arrive a few minutes early and introduce yourself to the Coach.
                                The Coach will ensure you are properly introduced and integrated.
                                You will be paired with an appropriate person for partner drills.
                                Ask the club about our Level 0 introductory class where everyone is new, or start with Level 1,
                                where participants will have a range of experience, from be
                            </p>
                        </div>
                    </div>
                </div>                                
            
                <div class="panel wt-panel">
                    <div class="acod-head">
                            <h3 class="acod-title">
                            <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" > 
                                How can we get natural way to health?

                                <span class="indicator"><i class="fa fa-plus"></i></span>
                            </a>
                            </h3>
                    </div>
                    <div id="collapseTwo5" class="acod-body collapse">
                        <div class="acod-content">
                        Monday – Friday: 9 to 7pm Saturday: 8 to 6pm Sunday: Closed 
                        </div>
                    </div>
                </div>
                
                <div class="panel wt-panel">
                    <div class="acod-head">
                            <h3 class="acod-title">
                            <a data-toggle="collapse" href="#collapseThree5" class="collapsed" data-parent="#accordion5"> 
                                What if i am do for body strength?

                                <span class="indicator"><i class="fa fa-plus"></i></span>
                            </a>
                            </h3>
                    </div>
                    <div id="collapseThree5" class="acod-body collapse">
                        <div class="acod-content">You can schedule your appointment by phone, in person or online. Reservations for your appointment are held with a credit card or gift certificate.</div>
                    </div>
                </div>
                
                <div class="panel wt-panel">
                    <div class="acod-head">
                        <h3 class="acod-title">
                            <a data-toggle="collapse"  href="#collapseFour5" class="collapsed"  data-parent="#accordion5"> 
                                Can I get a special trainer for bodybuilding?

                                <span class="indicator"><i class="fa fa-plus"></i></span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseFour5" class="acod-body collapse">
                        <div class="acod-content">No special clothing is required; come as you are! If you are enjoying several services, you will be provided with a robe and slippers. Towels for the eucalyptus steam shower are available. Your personal comfort is always most important to us! Efficiently unleash cross-media information without cross-media value. Quickly timely deliverables. Efficiently unleash cross-media information without cross-media value. Quickly maximize maximized timely deliverables for real-time schemas. Dramatically maintain solutions. Dramatically maintain solutions.Efficiently unleash cross-media information without cross-media value. Quickly maximize timely fixed deliverables for real-time functional schemas.</div>
                    </div>
                </div>

                <div class="panel wt-panel">
                    <div class="acod-head">
                            <h3 class="acod-title">
                            <a data-toggle="collapse" href="#collapseFive5" class="collapsed" data-parent="#accordion5" > 
                                When an i charged for the service?
                                <span class="indicator"><i class="fa fa-plus"></i></span>
                            </a>
                            </h3>
                    </div>
                    <div id="collapseFive5" class="acod-body collapse">
                        <div class="acod-content">Your certificate is considered the same as cash. It is necessary to keep track of this valuable property.</div>
                    </div>
                </div>
                                                    
            </div> 
        </div>                                 
    </div>
</div>   
<!-- FAQ SECTION END -->

<!-- FORM SECTION START -->
<div class="section-full p-t120 p-b90 site-bg-gray-light">

    <div class="container">
        <div class="section-content">                 
            <div class="row justify-content-center d-flex">
            
                <div class="col-lg-5 col-md-12 m-b30">
                    <div class="faq-image">
                        <div class="faq-media"><img src="{{ asset('gym/images/intro-pic.png') }}" alt="" ></div>
                    </div>
                </div>  
                                    
                <div class="col-lg-7 col-md-12 m-b30">
                    <div class="faq-help-form-outer">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>Tell Us Now</div>
                                
                            </div>
                            <h2>If you have any Question in your mind</h2>
                        </div>
                        <!-- TITLE END-->

                        <div class="faq-help-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter your name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Enter your email" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="site-button site-btn-effect">Submit Request</button>
                            </div>
                        </div>

                    </div>                                                                
                </div>
                                                                    

            </div>
        </div>
    </div>
</div>   
<!-- FORM ONE SECTION END -->

@endsection