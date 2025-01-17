@extends('gym.layouts.app')

@section('title', 'Home')

@section('content')

<!-- SLIDER START --> 
<div class="slider-outer">
                        
    <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
        <div id="webmax-one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
            <ul>	
            
                <!-- SLIDE 1 -->
                <li data-index="rs-901" 
                data-transition="fade" 
                data-slotamount="default" 
                data-hideafterloop="0" 
                data-hideslideonmobile="off"  
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="default"  
                data-thumb="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  
                data-rotate="0"  
                data-fstransition="fade" 
                data-fsmasterspeed="300" 
                data-fsslotamount="7" 
                data-saveperformance="off"  
                data-title="Slide Title" 
                data-param1="Additional Text" 
                data-param2="" 
                data-param3="" 
                data-param4="" 
                data-param5="" 
                data-param6="" 
                data-param7="" 
                data-param8="" 
                data-param9="" 
                data-param10="" 
                data-description="">
                    <!-- MAIN IMAGE -->
                    
                    <img src="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  alt=""  data-lazyload="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        
                    
                    <!-- LAYER NR. 0 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-901-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>
                    

                    <!-- LAYER NR. 1 Img -->
                    <div class="tp-caption   tp-resizeme change-img-slide1" 
                        id="slide-901-layer-1" 
                        data-x="['right','right','center','center']" data-hoffset="['-254','-50','0','0']" 
                        data-y="['middle','middle','bottom','bottom']" data-voffset="['-5','30','20','20']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;border-width:0px;">
                        <div>
                        <img src="{{ asset('gym/images/main-slider/slider1/d-1.png') }}"
                            alt="" 
                            data-ww="['1221px','722px','400px','250px']" 
                            data-hh="['846px','500px','277px','173px']" 
                            width="1221" height="846" 
                            data-no-retina>
                        </div>
                    </div>
            
                
                    <!-- LAYER NR. 2 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                    id="slide-901-layer-2" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['180','200','160','160']"  
                        data-fontsize="['34','32','28','28']"
                        data-lineheight="['34','32','28','28']"
                        data-width="['600','500','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 600;
                        color:#fff;
                        letter-spacing: 6px;
                        border-width:0px; font-family: 'Teko', sans-serif;text-transform:uppercase">
                        <div class="site-text-primary">Health</div>
                    </div>
                    
                    <!-- LAYER NR. 3 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-901-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-20','-80','-80']"  
                        data-fontsize="['130','80','60','50']"
                        data-lineheight="['130','80','60','50']"
                        data-width="['700','600','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 700;
                        color:#000;
                        border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase">
                        <div class="site-text-black">Grow your strength</div>
                    </div>                                
                                        
                    <!-- LAYER NR. 5 [ for botton ] -->
                    <div class="tp-caption tp-resizeme rev-btn" 	
                    id="slide-901-layer-5"						
                    data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','130','40','40']"  
                    data-lineheight="['none','none','none','none']"
                    data-width="['300','300','300','300']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                    
                    data-type="text" 
                    data-responsive_offset="on"
                    data-frames='[ 
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index:14;">
                    <div><a href="pricing.html" class="site-button">Ask For Price</a></div>
                    </div>


                <!-- Border Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-901-layer-6" 
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','off','off']"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"x:left;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeOut"},
                    {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);
                    border-color:rgb(255,255,255);border-style:solid;
                    border-width:0px 0px 100px 0px;"></div>                                

                </li>

                <!-- SLIDE 2 -->
                <li data-index="rs-902" 
                data-transition="fade" 
                data-slotamount="default" 
                data-hideafterloop="0" 
                data-hideslideonmobile="off"  
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="default"  
                data-thumb="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  
                data-rotate="0"  
                data-fstransition="fade" 
                data-fsmasterspeed="300" 
                data-fsslotamount="7" 
                data-saveperformance="off"  
                data-title="Slide Title" 
                data-param1="Additional Text" 
                data-param2="" 
                data-param3="" 
                data-param4="" 
                data-param5="" 
                data-param6="" 
                data-param7="" 
                data-param8="" 
                data-param9="" 
                data-param10="" 
                data-description="">
                    <!-- MAIN IMAGE -->
                    
                    <img src="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  alt=""  data-lazyload="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        
                    
                    <!-- LAYER NR. 0 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-902-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>
                    

                    <!-- LAYER NR. 1 Img -->
                    <div class="tp-caption   tp-resizeme change-img-slide1" 
                        id="slide-902-layer-1" 
                        data-x="['right','right','center','center']" data-hoffset="['-200','30','0','0']" 
                        data-y="['middle','middle','bottom','bottom']" data-voffset="['-5','30','20','20']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;border-width:0px;">
                        <div>
                        <img src="{{ asset('gym/images/main-slider/slider1/d-2.png') }}"
                            alt="" 
                            data-ww="['1026px','700px','400px','250px']" 
                            data-hh="['832px','568px','325px','203px']" 
                            width="1026" height="832" 
                            data-no-retina>
                        </div>
                    </div>
            
                
                    <!-- LAYER NR. 2 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                    id="slide-902-layer-2" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['180','200','160','160']"  
                        data-fontsize="['34','32','28','28']"
                        data-lineheight="['34','32','28','28']"
                        data-width="['600','500','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 600;
                        color:#fff;
                        letter-spacing: 6px;
                        border-width:0px; font-family: 'Teko', sans-serif;text-transform:uppercase">
                        <div class="site-text-primary">Fitness</div>
                    </div>
                    
                    <!-- LAYER NR. 3 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-902-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-20','-80','-80']"  
                        data-fontsize="['130','80','60','50']"
                        data-lineheight="['130','80','60','50']"
                        data-width="['700','600','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 700;
                        color:#000;
                        border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase">
                        <div class="site-text-black">Energize your Desire</div>
                    </div>                                
                                        
                    <!-- LAYER NR. 5 [ for botton ] -->
                    <div class="tp-caption tp-resizeme rev-btn" 	
                    id="slide-902-layer-5"						
                    data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','130','40','40']"  
                    data-lineheight="['none','none','none','none']"
                    data-width="['300','300','300','300']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                    
                    data-type="text" 
                    data-responsive_offset="on"
                    data-frames='[ 
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index:14;">
                    <div><a href="pricing.html" class="site-button">Ask For Price</a></div>
                    </div>


                <!-- Border Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-902-layer-6" 
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','off','off']"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"x:left;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeOut"},
                    {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);
                    border-color:rgb(255,255,255);border-style:solid;
                    border-width:0px 0px 100px 0px;"></div>                                

                </li>  
                
                <!-- SLIDE 3 -->
                <li data-index="rs-903" 
                data-transition="fade" 
                data-slotamount="default" 
                data-hideafterloop="0" 
                data-hideslideonmobile="off"  
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="default"  
                data-thumb="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  
                data-rotate="0"  
                data-fstransition="fade" 
                data-fsmasterspeed="300" 
                data-fsslotamount="7" 
                data-saveperformance="off"  
                data-title="Slide Title" 
                data-param1="Additional Text" 
                data-param2="" 
                data-param3="" 
                data-param4="" 
                data-param5="" 
                data-param6="" 
                data-param7="" 
                data-param8="" 
                data-param9="" 
                data-param10="" 
                data-description="">
                    <!-- MAIN IMAGE -->
                    
                    <img src="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}"  alt=""  data-lazyload="{{ asset('gym/images/main-slider/slider1/slide1.jpg') }}" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        
                    
                    <!-- LAYER NR. 0 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-903-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>
                    

                    <!-- LAYER NR. 1 Img -->
                    <div class="tp-caption   tp-resizeme change-img-slide1" 
                        id="slide-903-layer-1" 
                        data-x="['right','right','center','center']" data-hoffset="['-150','-50','0','0']" 
                        data-y="['middle','middle','bottom','bottom']" data-voffset="['-5','30','20','20']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="image" 
                        data-responsive_offset="on" 
            
                        data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},
                        {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
            
                        style="z-index: 13;border-width:0px;">
                        <div>
                        <img src="{{ asset('gym/images/main-slider/slider1/d-3.png') }}"
                            alt="" 
                            data-ww="['514px','400px','150px','150px']" 
                            data-hh="['859px','668px','250px','250px']" 
                            width="514" height="859" 
                            data-no-retina>
                        </div>
                    </div>
            
                
                    <!-- LAYER NR. 2 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                    id="slide-903-layer-2" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['180','200','160','160']"  
                        data-fontsize="['34','32','28','28']"
                        data-lineheight="['34','32','28','28']"
                        data-width="['600','500','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 600;
                        color:#fff;
                        letter-spacing: 6px;
                        border-width:0px; font-family: 'Teko', sans-serif;text-transform:uppercase">
                        <div class="site-text-primary">Workout</div>
                    </div>
                    
                    <!-- LAYER NR. 3 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-903-layer-3" 
                        data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-20','-80','-80']"  
                        data-fontsize="['130','80','60','50']"
                        data-lineheight="['130','80','60','50']"
                        data-width="['700','600','85%','96%']"
                        data-height="['none','none','none','none']"
                        data-whitespace="['normal','normal','normal','normal']"
                    
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[
                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                        ]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[5,5,5,5]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                    
                        style="z-index: 11; 
                        white-space: normal; 
                        font-weight: 700;
                        color:#000;
                        border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase">
                        <div class="site-text-black">Get a new Shape</div>
                    </div>                                
                                        
                    <!-- LAYER NR. 5 [ for botton ] -->
                    <div class="tp-caption tp-resizeme rev-btn" 	
                    id="slide-903-layer-5"						
                    data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','130','40','40']"  
                    data-lineheight="['none','none','none','none']"
                    data-width="['300','300','300','300']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                    
                    data-type="text" 
                    data-responsive_offset="on"
                    data-frames='[ 
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index:14;">
                    <div><a href="pricing.html" class="site-button">Ask For Price</a></div>
                    </div>


                <!-- Border Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-903-layer-6" 
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','off','off']"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"x:left;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeOut"},
                    {"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 10;background-color:rgba(0, 0, 0, 0);
                    border-color:rgb(255,255,255);border-style:solid;
                    border-width:0px 0px 100px 0px;"></div>                                

                </li>                            
                                                                                
                
                
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
        </div>
    </div>

</div>
<!-- SLIDER END -->            

<!-- ABOUT ONE SECTION START -->
<div class="section-full p-t120 p-b90 bg-no-repeat bg-no-repeat bg-bottom-center bg-gray-light">
    <div class="about-section-one">
        <div class="container">
            <div class="section-content">                 
                <div class="row justify-content-center d-flex">
                
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="about-gym-one">
                            <div class="about-gym-one-media"><img src="{{ asset('gym/images/intro-pic.png') }}" alt="" ></div>
                            <div class="outline-text">Strong</div>
                        </div>
                    </div>  
                                          
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="about-section-one-right">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>About US</div>
                                
                            </div>
                            <h2>Give A Shape of Your Body</h2>
                            <p>This also meant we needed to provide a learning environment run by
                                experienced and successful coaches. However, our most important goal 
                                was to create a welcoming atmosphere and community in which everyone
                                feels a sense of belonging.</p>
                        </div>
                        <!-- TITLE END-->

                         <div class="about-one">
                            <div class="wt-icon-box-wraper left bg-black m-b30">
                                <div class="wt-icon-box-sm site-bg-gray">
                                    <span class="icon-cell site-bg-dark"><i class="flaticon-six-pack"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Full-Body Strength</h5>
                                    <p>Train with the best experts in bodybuilding field.</p>
                                </div>
                            </div>

                            <div class="wt-icon-box-wraper left bg-black m-b30">
                                <div class="wt-icon-box-sm site-bg-gray">
                                    <span class="icon-cell site-bg-dark"><i class="flaticon-stationary-bicycle"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Lean Machines</h5>
                                    <p>Our personal trainers will help you find a perfect workout.</p>
                                </div>
                            </div>
                            
                            <div class="wt-icon-box-wraper left bg-black m-b30">
                                <div class="wt-icon-box-sm site-bg-gray">
                                    <span class="icon-cell site-bg-dark"><i class="flaticon-exercise"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Power Yoga</h5>
                                    <p>Uniquely sequenced class work to heat and challenge the body </p>
                                </div>
                            </div>                                        

                         </div>
                        

                        
                        <a href="about-1.html" class="site-button site-btn-effect">Learn More</a> 
                        </div>                                                                
                    </div>
                                                                         

                </div>
            </div>
        </div> 
    </div>
</div>   
<!-- ABOUT ONE SECTION END -->

<!-- SOME FACTS START -->
<div class="section-full p-t120 p-b120 site-bg-gray-light">
    <div class="container">
            <div class="section-content"> 
                <div class="row justify-content-center d-flex align-items-center">
     
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>Some Facts</div>
                            </div>
                            <h2>We always provide best fitness service for <span class="site-text-primary">25 years</span></h2>
                        </div>
                        <!-- TITLE END-->                            
                    </div>
 
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="c-section-one">
                            <div class="row justify-content-center d-flex">
                                <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-muscle"></i>
                                        </span>
                                        <div class="icon-content">
                                            <div class="m-b5 site-text-primary"><span class="counter">150</span></div>
                                            <div class="icon-content-info">Expert Trainer</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-gym"></i>
                                        </span>
                                        <div class="icon-content">
                                            <div class="m-b5 site-text-primary"><span class="counter">75</span></div>
                                            <div class="icon-content-info">Total Branch</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-figure"></i>
                                        </span>
                                        <div class="icon-content">
                                            <div class="m-b5 site-text-primary"><span class="counter">250</span></div>
                                            <div class="icon-content-info">Happy Clients</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper left ">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-sport"></i>
                                        </span>
                                        <div class="icon-content">
                                            <div class="m-b5 site-text-primary"><span class="counter">18</span></div>
                                            <div class="icon-content-info">Experience</div>
                                        </div>
                                    </div>
                                </div>                                            

                            </div>

                        </div>

                    </div>  
                                                                                                                                                                           
                </div>

            </div>
    </div>
</div>   
<!-- SOME FACTS END -->  

<!-- OUR TEAM START -->
<div class="section-full p-t120 p-b90 bg-cover" style="background-image:url({{ asset('gym/images/background/bg-1.jpg') }})">

    <div class="container">
       
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-secondry">
                <div  class="sep-leaf-left"></div>
                <div>Our Trainer</div>
            </div>
            <h2>Team of Expert Coaches</h2>
        </div>
        <!-- TITLE END-->
                   
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic1.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Bodybuilding Coach</span>                                        
                                <h3 class="m-t0 team-name">William Dixon</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic2.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Body Builder Trainer</span>                                        
                                <h3 class="m-t0 team-name">Dominic Snyder</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="wt-team-1">
                        
                        <div class="wt-media">
                            <img src="{{ asset('gym/images/team/pic3.jpg') }}" alt="">
                        </div>                                   

                        <div class="wt-info">
                            <div class="team-detail">
                                <span class="team-position">Bodybuilding Coach</span>                                        
                                <h3 class="m-t0 team-name">Virgil Cook</h3>
                            </div>
                            <div class="team-social-center">
                                <ul class="team-social-bar">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>                                        
                        </div>
                
                    </div>
                </div>                                                        
                
            </div>
        </div>      
            
    </div>
</div>   
<!-- OUR TEAM SECTION END --> 

<!-- PROJECT SECTION START -->
<div class="section-full  p-t120 p-b90 site-bg-black">
    <div class="container-fluid">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer when-bg-dark">
            <div class="wt-small-separator site-text-primary">
                <div class="sep-leaf-left"></div>
                <div>Find your exercise</div>
            </div>
            <h2 class="wt-title">New Exclusive Workouts</h2>
        </div>
        <!-- TITLE END-->

        <div class="section-content">     
           <div class="owl-carousel workout-slider1  workout-box-style1-outer owl-btn-top-right m-b30">
               <!-- COLUMNS 1 --> 
               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>01</span>
                                Boxing
                            </div>
                            <h3 class="workout-title-large">Boxing Training Session</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/1.jpg') }}" alt="">
                        </div>
                   </div>
               </div>
               <!-- COLUMNS 2 --> 
               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>02</span>
                                Cardio Training
                            </div>
                            <h3 class="workout-title-large">Cardio Training Session</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/2.jpg') }}" alt="">
                        </div>
                   </div>
               </div>                           
                                    
               <!-- COLUMNS 3 --> 

               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>03</span>
                                Bodybuilding
                            </div>
                            <h3 class="workout-title-large">Bodybuilding Training Session</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/3.jpg') }}" alt="">
                        </div>
                   </div>
               </div>                           
               
               <!-- COLUMNS 4 --> 

               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>04</span>
                                Bodybuilding
                            </div>
                            <h3 class="workout-title-large">Psychology of Training</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/4.jpg') }}" alt="">
                        </div>
                   </div>
               </div>                           
                                    
               <!-- COLUMNS 5 --> 

               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>05</span>
                                Self Defence
                            </div>
                            <h3 class="workout-title-large">Practical Self Defence</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/5.jpg') }}" alt="">
                        </div>
                   </div>
               </div>                           
                                     
               <!-- COLUMNS 6 --> 

               <div class="item ">
                   <div class="workout-box-style1">
                        <div class="workout-content">
                            <div class="workout-title site-text-primary">
                                <span>06</span>
                                Fitness
                            </div>
                            <h3 class="workout-title-large">Fitness Training For man</h3>
                        </div>
                        <div class="workout-media">
                            <img src="{{ asset('gym/images/workout/6.jpg') }}" alt="">
                        </div>
                   </div>
               </div>                           
                                       
          
               

           </div>
        </div>
   </div>
  
</div>   
<!-- PROJECT CHOOSE SECTION END -->              

<!-- 3 STEPS START -->
<div class="section-full">

    <div class="container">
                   
        <div class="section-content">
           <div class="steps-section">
                <h2 class="wt-title">Work Out<br> 3 Steps to<br> Losing Weight </h2>

                <div class="wt-media">
                    <img src="{{ asset('gym/images/step-bg.png') }}" alt="">
                </div>

           </div>
        </div>      
            
    </div>
</div>   
<!-- 3 STEPS SECTION END --> 


<!-- Video SECTION START -->
<div class="section-full site-bg-black">

    <div class="container-fluid">
                   
        <div class="section-content">
           <div class="row">
                <div class="col-lg-6 bg-cover" style="background-image: url({{ asset('gym/images/background/bg-2.jpg') }});">
                    <div class="video-section-first">
                        <a href="https://www.youtube.com/watch?v=c1XNqw2gSbU" class="mfp-video play-now-video">
                            <i class="icon fa fa-play"></i>
                            <span class="ripple"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-section-first-content p-tb120">
                        <div class="section-head left wt-small-separator-outer when-bg-dark">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>We Provide</div>                                            
                            </div>
                            <h2 class="wt-title">world class facilities</h2>
                            <p>This also meant we needed to provide a learning environment
                                run by experienced and successful coaches. However, our most
                                important goal was to create a welcoming atmosphere.</p>
                        </div>
                        <a href="our-classes.html" class="site-button site-btn-effect">Learn More</a>
                    </div> 

                </div>

           </div>
        </div>      
            
    </div>
</div>   
<!-- Video SECTION END --> 

<!-- Time Table Section START -->
<div class="section-full  p-t120 p-b120">

    <div class="container">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
                <div  class="sep-leaf-left"></div>
                <div>Our timetable</div>
            </div>
            <h2>Working Hours & Classes</h2>
        </div>
        <!-- TITLE END--> 
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

<!-- TESTIMONIAL SECTION START -->
<div class="section-full  p-t120 p-b90 testimonial-1-outer" style="background-image:url({{ asset('gym/images/background/bg3.jpg') }});">
    <div class="container">
        <div class="section-content"> 
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer when-bg-dark">
                        <div class="wt-small-separator site-text-primary">
                            <div  class="sep-leaf-left"></div>
                            <div>Fitness expert</div>
                        </div>
                        <h2 class="wt-title">What Our Clients Says?</h2>
                    </div>
                    <!-- TITLE END-->    
                    

                            <div class="testimonial-1-content owl-carousel">
                            
                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic1.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
                                            </div> 

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic2.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
                                            </div> 

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="testimonial-1 bg-white">
                                        <div class="testimonial-content">
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic-block"> 
                                                    <div class="testimonial-pic">
                                                        <img src="{{ asset('gym/images/testimonials/pic3.jpg') }}" alt="">
                                                    </div>
                                                </div>                                          
                                                <div class="testimonial-info">
                                                    <span class="testimonial-name">Jack London</span>
                                                    <span class="testimonial-position">Nutritionist</span>
                                                </div>
                                            </div>
                                            
                                            <div class="testimonial-text">
                                                <i class="flaticon-right-quote"></i>
                                                <p>The program works every part of the body and helps everyone
                                                   achieve their goals. I’m feeling the best I have ever felt in my life....
                                                   I feel healthier physically as well as mentally.</p>
                                            </div> 

                                        </div>
                                    </div>
                                </div>                                            
                                                                          
                                
                            </div>
                  
                </div>
         
           </div>
        </div>
    </div>                
</div>
<!-- TESTIMONIAL SECTION END -->
            
<!-- OUR BLOG START -->
<div class="section-full">

    <div class="section-content">
        <div class="row d-flex justify-content-start no-gutters blog-post-1-outer">
            <div class="col-xl-3 col-lg-6 col-md-6 col-6 blog-left-title-outer site-bg-primary d-flex align-items-center">
                <div class="blog-left-title">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator white">
                            <div  class="sep-leaf-left white"></div>
                            <div>Latest Blog</div>
                        </div>
                        <h2 class="wt-title">Our Recent News</h2>
                    </div>
                    <!-- TITLE END-->
                </div>
            </div> 

            <!--Block one-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                
                <div class="blog-post-style-1">
                    <div class="blog-bg bg-cover" style="background-image: url({{ asset('gym/images/blog/blog-bg/1.jpg') }});"></div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-comment"><i class="fa fa-commenting-o"></i>(14)</li>
                            <li class="post-date"><i class="fa fa-calendar"></i>13 Jun</li>                                            
                        </ul>
                    </div>
                    <div class="wt-post-info">

                        <div class="wt-post-author">
                            <div class="post-author-pic"><img src="{{ asset('gym/images/blog/author/1.jpg') }}" alt=""></div>
                            <div class="post-author-name">By Sarah Atkins </div>
                        </div>                                 
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="blog-single.html">How to Keep Your Body Healthy in Over the festival</a></h3>
                        </div>
                    </div> 
                    <div class="wt-post-readmore ">
                        <a href="blog-single.html" class="site-button-link">Read More <i class="flaticon-next"></i></a>
                    </div>                                
                </div>
            </div>

            <!--Block two-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                
                <div class="blog-post-style-1">
                    <div class="blog-bg bg-cover" style="background-image: url({{ asset('gym/images/blog/blog-bg/2.jpg') }});"></div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-comment"><i class="fa fa-commenting-o"></i>(08)</li>
                            <li class="post-date"><i class="fa fa-calendar"></i>18 Jun</li>                                            
                        </ul>
                    </div>
                    <div class="wt-post-info">

                        <div class="wt-post-author">
                            <div class="post-author-pic"><img src="{{ asset('gym/images/blog/author/2.jpg') }}" alt=""></div>
                            <div class="post-author-name">By Donald Jackson </div>
                        </div>                                 
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="blog-single.html">Give your fitness a boost with our gym challenge</a></h3>
                        </div>
                    </div> 
                    <div class="wt-post-readmore ">
                        <a href="blog-single.html" class="site-button-link">Read More <i class="flaticon-next"></i></a>
                    </div>                                
                </div>
            </div>
            
            <!--Block Three-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                
                <div class="blog-post-style-1">
                    <div class="blog-bg bg-cover" style="background-image: url({{ asset('gym/images/blog/blog-bg/3.jpg') }});"></div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-comment"><i class="fa fa-commenting-o"></i>(22)</li>
                            <li class="post-date"><i class="fa fa-calendar"></i>28 Jun</li>                                            
                        </ul>
                    </div>
                    <div class="wt-post-info">

                        <div class="wt-post-author">
                            <div class="post-author-pic"><img src="{{ asset('gym/images/blog/author/3.jpg') }}" alt=""></div>
                            <div class="post-author-name">By Thomas Garman </div>
                        </div>                                 
                        <div class="wt-post-title ">
                            <h3 class="post-title"><a href="blog-single.html">Fitness is not About Being Better than Someone Else</a></h3>
                        </div>
                    </div> 
                    <div class="wt-post-readmore ">
                        <a href="blog-single.html" class="site-button-link">Read More <i class="flaticon-next"></i></a>
                    </div>                                
                </div>
            </div> 

        </div>
    </div>

 </div>   
<!-- OUR BLOG END -->

<!-- CLIENT LOGO SECTION START -->
<div class="section-full site-bg-gray-light p-tb120">
    <div class="container home-client-outer">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="client-bg-img">
                    <div class="wt-media">
                        <img src="{{ asset('gym/images/client-logo-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
            <!-- TITLE START-->
            <div class="section-head left wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div  class="sep-leaf-left"></div>
                    <div>Fitness Sales Associates</div>                                
                </div>
                <h2>A few of our clients</h2>
            </div>
            <!-- TITLE END-->
            </div>
        </div>
        <div class="section-content">

            <div class="owl-carousel home-client-carousel owl-btn-vertical-center shadow">
            
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w1.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w2.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w3.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w4.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w5.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w6.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w1.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w2.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w3.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w4.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w5.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w6.png') }}" alt=""></a></div>
                    </div>
                </div>  
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w1.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w2.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w3.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w4.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w5.png') }}" alt=""></a></div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                        <a href="javascript:void(0);"><img src="{{ asset('gym/images/client-logo/w6.png') }}" alt=""></a></div>
                    </div>
                </div>                                                                      
                
            </div>

        </div>
    </div>
</div>
<!-- CLIENT LOGO  SECTION End -->

@endsection