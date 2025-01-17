@extends('gym.layouts.app')

@section('title', 'Classes')

@section('content')

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('gym/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Our Classes</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- Time Table Section START -->
<div class="section-full  p-t120 p-b90 site-bg-gray-light">
            
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div  class="sep-leaf-left"></div>
                <div>Our timetable</div>
            </div>
            <h2>Working housr & Classes</h2>
        </div>
        <!-- TITLE END--> 
    </div>            

    <div class="container">
        <div class="section-content">
        <div class="time-zone-table1 table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th><div class="classes-days">Routine</div></th>
                    <th><div class="classes-days">Monday</div></th>
                    <th><div class="classes-days">Tuesday</div></th>
                    <th><div class="classes-days">Wednesday</div></th>
                    <th><div class="classes-days">Thursday</div></th>
                    <th><div class="classes-days">Friday</div></th>
                    <th><div class="classes-days">Saturday</div></th>
                    <th><div class="classes-days">Sunday</div></th>
                </tr>
                </thead>
                <tbody>
                <!--row one-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>06</strong> <span>am</span></div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Cardio</span>
                            <p>06 am - 07 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Yoga</span>
                            <p>06 am - 07 am</p>
                        </div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Cardio</span>
                            <p>06 am - 07 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Yoga</span>
                            <p>06 am - 07 am</p>
                        </div>
                    </td>                                                                
                </tr>

                <!--row two-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>07</strong> <span>am</span></div>
                    </td>

                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Cycling</span>
                            <p>07 am - 08 am</p>
                        </div>
                    </td>                                    
                    <td>
                        <div class="content-data">
                            <span>Boxing</span>
                            <p>07  am - 08 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Power lifting</span>
                            <p>07  am - 08 am</p>
                        </div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Cycling</span>
                            <p>07 am - 08 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>                                                                
                </tr> 

                <!--row thee-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>08</strong> <span>am</span></div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Power Lifting</span>
                            <p>08 am - 09 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Cycling</span>
                            <p>08 am - 09 am</p>
                        </div>
                    </td>
                    <td><div class="content-empty"></div></td>
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Power Lifting</span>
                            <p>08 am - 09 am</p>
                        </div>
                    </td>                                                                
                </tr> 

                <!--row four-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>05</strong> <span>pm</span></div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Dumbbelling</span>
                            <p>05 pm - 06 pm</p>
                        </div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Yoga</span>
                            <p>05 pm - 06 pm</p>
                        </div>
                    </td> 
                    <td>
                        <div class="content-data">
                            <span>Cycling</span>
                            <p>05 pm - 06 pm</p>
                        </div>
                    </td>                                                               
                    <td><div class="content-empty"></div></td>


                    <td>
                        <div class="content-data">
                            <span>Jumping</span>
                            <p>05 pm - 06 pm</p>
                        </div>
                    </td>  
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Cardio</span>
                            <p>05 pm - 06 pm</p>
                        </div>
                    </td>                                                                
                </tr>  

                <!--row five-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>06</strong> <span>pm</span></div>
                    </td>

                    <td><div class="content-empty"></div></td>
                    <td><div class="content-empty"></div></td>
                    <td><div class="content-empty"></div></td>                                    
                    <td>
                        <div class="content-data">
                            <span>Power Lifting</span>
                            <p>06 pm - 07 pm</p>
                        </div>
                    </td>                                    
                    <td><div class="content-empty"></div></td> 
                    <td>
                        <div class="content-data">
                            <span>Dumbbelling</span>
                            <p>06 pm - 07 pm</p>
                        </div>
                    </td>

                    <td><div class="content-empty"></div></td>                                                                
                </tr>  

                <!--row Six-->
                <tr>
                    <td>
                        <div class="classes-time"><strong>07</strong> <span>pm</span></div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Cardio</span>
                            <p>07 pm - 08 pm</p>
                        </div>
                    </td>
                    <td>
                        <div class="content-data">
                            <span>Power Lifting</span>
                            <p>07 pm - 08 pm</p>
                        </div>
                    </td> 
                    <td>
                        <div class="content-data">
                            <span>Dumbbelling</span>
                            <p>07 pm - 08 pm</p>
                        </div>
                    </td>                                                               
                    <td><div class="content-empty"></div></td>


                    <td>
                        <div class="content-data">
                            <span>Jumping</span>
                            <p>07 pm - 08 pm</p>
                        </div>
                    </td>  
                    <td><div class="content-empty"></div></td>
                    <td>
                        <div class="content-data">
                            <span>Weight loss</span>
                            <p>07 pm - 08 pm</p>
                        </div>
                    </td>                                                                
                </tr>  

                
                </tbody>
            </table>                           
        </div>     
        </div>
    </div>
    
</div>   
<!-- Time Table Section END -->

<!-- YEAR EX. START -->
<div class="section-full overlay-wraper bg-center bg-cover" style="background-image:url({{ asset('gym/images/background/bg8.jpg') }});">
    <div class="overlay-main site-bg-black opacity-09"></div>
    <div class="container">
                   
        <div class="section-content">
           <div class="year-section">
               <div class="row">
                   <div class="col-lg-6 col-md-12">
                        <h2 class="wt-title">We Always Provide Best Fitness Service For 25 Years</h2>
                   </div>
                   <div class="col-lg-6 col-md-12">
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/step-bg.png') }}" alt="">
                        </div>
                    </div>
                </div>

           </div>
        </div>      
            
    </div>
</div>   
<!-- YEAR EX. SECTION END -->             

<!-- TIME SECTION SECTION START -->
<div class="section-full  p-t120 site-bg-gray workout-box-style3-section">
    <div class="container">
        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-lg-6 col-md-12 wt-separator-two-part-left">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Our timetable</div>
                        </div>
                        <h2 class="wt-title">Classes and Training</h2>
                    </div>
                    <!-- TITLE END-->
                </div>
                                            
            </div>
        </div>

        <div class="section-content">     
            <div class="owl-carousel workout-slider3  workout-box-style3-outer owl-btn-top-right">
                <!-- COLUMNS 1 --> 
                <div class="item ">
                    <div class="workout-box-style3">

                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout3/m1.jpg') }}" alt="">
                            <div class="workout-time">
                                <span>12 Wed, 10:00 Am</span>
                            </div>
                        </div>

                        <div class="workout-content">
                            <h3 class="workout-title-large">Boxing</h3>                                        
                            <div class="workout-title">By kevin crossman</div>

                        </div> 

                    </div>
                </div>
                <!-- COLUMNS 2 --> 
                <div class="item ">
                    <div class="workout-box-style3">

                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout3/m2.jpg') }}" alt="">
                            <div class="workout-time">
                                <span>12 Wed, 10:00 Am</span>
                            </div>
                        </div>

                        <div class="workout-content">
                            <h3 class="workout-title-large">Weight lifting</h3>                                        
                            <div class="workout-title">By john carry</div>

                        </div> 

                    </div>
                </div>                          
                                    
                <!-- COLUMNS 3 -->
                <div class="item ">
                    <div class="workout-box-style3">

                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout3/m3.jpg') }}" alt="">
                            <div class="workout-time">
                                <span>12 Wed, 10:00 Am</span>
                            </div>
                        </div>

                        <div class="workout-content">
                            <h3 class="workout-title-large">Running way</h3>                                        
                            <div class="workout-title">By Devid smith</div>

                        </div> 

                    </div>
                </div>                             
            
                
                <!-- COLUMNS 4 -->
                <div class="item ">
                    <div class="workout-box-style3">

                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout3/m4.jpg') }}" alt="">
                            <div class="workout-time">
                                <span>12 Wed, 10:00 Am</span>
                            </div>
                        </div>

                        <div class="workout-content">
                            <h3 class="workout-title-large">Cardio</h3>                                        
                            <div class="workout-title">By kevin crossman</div>

                        </div> 

                    </div>
                </div>                             
    
                                    
                <!-- COLUMNS 5 -->
                <div class="item ">
                    <div class="workout-box-style3">

                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout3/m5.jpg') }}" alt="">
                            <div class="workout-time">
                                <span>12 Wed, 10:00 Am</span>
                            </div>
                        </div>

                        <div class="workout-content">
                            <h3 class="workout-title-large">Yoga</h3>                                        
                            <div class="workout-title">By kevin crossman</div>

                        </div> 

                    </div>
                </div>                             
    

            </div>
        </div>
    </div>
    
</div>   
<!-- TIME SECTION SECTION END --> 

@endsection