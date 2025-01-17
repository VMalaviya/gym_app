@extends('gym.layouts.app')

@section('title', 'Register')

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
                        
                        <form action="{{ route('register.user') }}" method="post" class="">
                            @csrf
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h3 class="wt-title m-b30">Register Here...!</h3>
                            </div>
                            <!-- TITLE END-->                                        
                                                                    
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="user_first_name" value="{{old('user_first_name')}}" type="text" class="form-control border border-success" placeholder="First Name">
                                        @error('user_first_name')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="user_last_name" value="{{old('user_last_name')}}" type="text" class="form-control border border-success" placeholder="Name">
                                        @error('user_last_name')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="user_email" value="{{old('user_email')}}" type="text" class="form-control border border-success" placeholder="Email">
                                        @error('user_email')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="user_phone_number" value="{{old('user_phone_number')}}" type="text" class="form-control border border-success" placeholder="Phone">
                                        @error('user_phone_number')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="user_password" type="password" class="form-control border border-success" placeholder="Password">
                                        @error('user_password')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="user_password_confirmation" type="password" class="form-control border border-success" placeholder="Confirm Password">
                                        @error('user_password_confirmation')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" class="site-button site-btn-effect">Register Now</button>
                                    </center>
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