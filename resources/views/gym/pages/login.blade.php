@extends('gym.layouts.app')

@section('title', 'Login')

@section('content')

<!-- CONTACT FORM -->
<div class="section-full  p-t80 p-b80" style="background-image:url({{ asset('gym/images/background/bg-dott.png') }})">   
<div class="section-content">
    <div class="container site-bg-white" style="max-width: 540px;">
        <div class="contact-one">
            <!-- CONTACT FORM-->
            <div class="row no-gutters d-flex justify-content-center flex-wrap">
                
                <div class="col-lg-12 col-md-12 site-bg-white">
                    <div class="contact-form-outer p-a50 ">
                        <form  class="cons-contact-form" method="post" action="#">

                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h3 class="wt-title m-b30">Login Here...!</h3>
                            </div>
                            <!-- TITLE END-->                                        
                                                                    
                            <div class="row">
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" required placeholder="Subject">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <center><button type="submit" class="site-button site-btn-effect">Login Now</button></center>
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

@endsection