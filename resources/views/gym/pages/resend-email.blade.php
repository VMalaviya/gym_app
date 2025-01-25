@extends('gym.layouts.app')

@section('title', 'User Email Verification')

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
                                
                                <h3>Hello, @if(Auth::check()) {{Auth::user()->full_name}} @endif</h3>
                                @if (isset($success))
                                    <p class="text-success">
                                        A new verification link has been sent to your email address.
                                    </p>
                                @endif

                                @if (isset($warning))
                                    <p class="text-warning">
                                        A verification link has already been sent to your email address. Please wait before requesting a new link. 
                                    </p>
                                    <p class="text-danger">If you deleted or did not receive the email, please wait for the link to expire. The link will expire in 10 minutes, after which you can request a new one.
                                    </p>
                                @endif

                                @if (isset($info))
                                    <div class="alert alert-info">
                                        You have already verified your email.
                                    </div>
                                @endif
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
