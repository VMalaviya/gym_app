@extends('gym.layouts.app')

@section('title', 'Login')

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
                                <h3>Error</h3>
                                <strong>404</strong>
                                <h3>Oops! Looks like the page is gone.</h3>
                                <p class="text-danger font-weight-bold">{{$message404}}</p>
                                <a href="{{ route('gym.pages.home') }}" class="site-button-secondry site-btn-effect">GO TO HOME</a>
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