<footer class="site-footer footer-dark " >
        
           
        
    <!-- FOOTER BLOCKES START -->  
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    
                    <div class="widget widget_about">
                        <h3 class="widget-title">About Us</h3>
                        <p>The longest running gym in Chicago. Owned and operated by a personal trainer with over 25 years experience</p>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-pinterest"></a></li>
                        </ul>
                    </div>                            
                    
                </div>                        
            
                <div class="col-lg-3 col-md-6"> 

                    <div class="widget recent-posts-entry">
                        <h3 class="widget-title">Get in Touch</h3>                            
                        <ul class="widget_address"> 
                            <li><i class="fa fa-map-marker"></i>92 Princess Road, parkvenue Greater Ahmedabad, KP10CR, IND</li>
                            <li><i class="fa fa-envelope"></i>contact@gmail.com</li>
                            <li> <i class="fa fa-phone"></i>+91 1234567890</li>
                        </ul>  
                    </div>
                    
                </div> 


                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_services">
                        <h3 class="widget-title">Useful links</h3>
                        <ul>
                            <li><a href="{{ route('gym.pages.about') }}">About</a></li>
                            <li><a href="{{ route('gym.pages.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('gym.pages.pricing') }}">Pricing</a></li>
                            <li><a href="{{ route('gym.pages.faq') }}">FAQ</a></li>
                            <li><a href="{{ route('gym.pages.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                


               <div class="col-lg-3 col-md-6">  
                    <div class="widget widget_newsletter">
                            <h3 class="widget-title">Newsletter</h3>
                            <p>Our newsletters contain useful blog 
                                posts, case studies, “how to”s, and ways
                                to help you grow your business. </p>
                            <div class="newsletter-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="Enter Email Address" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="flaticon-send"></i></button>
                                        </span>
                                    </div>
                                 </form>
                            </div>                                    
                     </div>
                                                                             
               </div> 

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
                        
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-info">
                <div class="footer-logo">
                  <img src="{{ asset('gym/images/logo-light.png') }}" alt="logo">  
                </div>
                <div class="footer-copy-right">
                    <span class="copyrights-text">© {{ date('Y') }} GYM. Designed By Vikas Malaviya</span>
                </div>
                <div class="footer-link">
                     <ul class="copyrights-nav"> 
                        <li><a href="#">Terms  &amp; Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        {{-- <li><a href="contact-1.html">Help</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>   
    </div>   

</footer>