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
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        A fresh verification link has been sent to your email address.
                                    </div>
                                @endif
                                <h3>Hello, @if(Auth::check()) {{Auth::user()->full_name}} @endif</h3>
                                <h5 class="text-danger">Verify Your Email Address...</h5>
                                {{-- <p class="text-primary font-weight-bold">Congratulations on successfully registering with us! 🎉</p> --}}
                                <p> You need to verify your email address to fully activate your account.</p> 
                                <p> A verification link has been sent to your email.</p>
                                <p>
                                    <a href="{{ route('verification.resend') }}" class="btn btn-danger">Resend Verification Email</a> if you haven't received it.
                                </p>
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