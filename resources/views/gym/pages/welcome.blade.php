@extends('gym.layouts.app')

@section('title', 'Welcome')

@section('content')

<!-- CONTENT START -->
<div class="page-content">

    <!-- Error SECTION START -->
    <div class="section-full p-t120 p-b90">
        <div class="container">
            <div class="section-content">

                <div class="page-notfound">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-notfound-content">
                                <h3>Welcome @if(Auth::check()) {{Auth::user()->full_name}} @endif</h3>
                                <h5 class="text-success">Registration successful!</h5>
                                <p class="text-primary font-weight-bold">Congratulations on successfully registering with us! 🎉</p>
                                <p>An email verification link has been sent to your registered email address. Please check your inbox <b>(and spam folder, just in case)</b> to verify your email address.</p>
                                <h5 class="text-danger">Why verify your email?</h5>
                                <p>Verifying your email unlocks all the benefits of being a member of our gym. You won’t want to miss out on exclusive offers, updates, and access to your personalized gym plan!</p>
                                <p>Once your email is verified, you'll be all set to start your fitness journey with us. 💪 </p>
                            </div>
                        </div>
                        <div class="col-lg-6">                          
                            <div class="page-notfound-media">
                                <img src="{{ asset('gym/images/error-bg.png') }}" alt="">
                            </div>
                        </div>      
                    </div>                         
                </div>

            </div>
        </div>
    </div>   
    <!-- Error  SECTION END -->           
    

</div>
<!-- CONTENT END -->

@endsection