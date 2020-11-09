

@include('frontend.include.header')
@include('frontend.include.navbar')

<div class="lec_slider lec_slider_inside lec_image_bck lec_fixed lec_wht_txt" data-stellar-background-ratio="0.3">
        
        <!-- Firefly -->
        <div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

        <!-- Over -->
        <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
        

        <div class="container">


            <!-- Slider Texts -->
            <div class="lec_slide_txt lec_slide_center_middle text-center">
                <img src="{{asset('frontend/images/bbq/bbq_logo.png')}}')}}" alt="" height="180"><br>
                <h1 class="text-center">Contact Us</h2>
                <div class="lec_slide_subtitle">S & S CUISINEURS</div>
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->


    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="lec_content" class="lec_content">



        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0"></div>

                <div class="container text-center">


                    <div class="row">
                        
                        <div class="col-md-9 lec_animation_block lec_map_hidden_top" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                           <div class="lec_map_container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4263744670334!2d90.38764831536425!3d23.87449488994056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c57d3d1d1de1%3A0x15850309d9c08278!2sSST%20Tech%20Limited!5e0!3m2!1sen!2sbd!4v1604741667885!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>

                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)" data-image="images/main_back.jpg')}}">

                            <!-- Over -->
                            <div class="lec_over" data-color="#000" data-opacity="0.05"></div>

                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name=""rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="contact-form-button">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->         
                
        </section>
        <!-- section end -->


        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0.05"></div>

                <div class="container text-center">

                    <div class="row">
                        <div class="col-md-10 lec_animation_block lec_wht_txt" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)">
                                
                            <img src="{{asset('frontend/images/contact.jpg')}}" class="img-fluid" alt="">

                        </div>
                        <!-- col end -->

                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck" data-bottom-top="transform:translate3d(0px, -80px, 0px)" data-top-bottom="transform:translate3d(0px, 0px, 0px)" data-image="images/main_back.jpg')}}">

                            <!-- Over -->
                            <div class="lec_over" data-color="#000" data-opacity="0.05"></div>
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" alt="">

                                <h3>Contact Info</h3>

                                <div class="row lec_contacts_icons">
                                    <i class="fas fa-map"></i> 34 Sonargaon Janapath, Dhaka 1230 <br>
                                    <i class="fas fa-envelope"></i> info@ssttechbd.com <br>
                                    <i class="fas fa-phone"></i> +880248956868<br>
                                    <i class="fas fa-globe"></i> https://ssttechbd.com/ <br>
                                </div>
                            </div>
                        </div>
                        <!-- col end -->


                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
                    
                
        </section>
        <!-- section end -->

        

        
    
    </section>
    <!-- Content End -->

@include('frontend.include.footer')