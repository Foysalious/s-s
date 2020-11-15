

@include('frontend.include.header')
@include('frontend.include.navbar')




<!-- Banner Start -->
<div class="lec_slider lec_image_bck lec_fixed lec_wht_txt">
     <!-- Firefly -->
     <div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

     <!-- owl carouse start -->
     <div class="banner-carousel owl-carousel owl-theme">

          <!-- item start -->
          <div class="item" style="background-image: url({{ asset('frontend/images/sl5.jpg') }});">
               <div class="banner-overlay">
                    <div class="container">
                         <div class="row">
                              <div class="col-md-12">
                                   <img src="{{asset('frontend/images/sygmaz.jpg')}}" class="banner-logo" alt="">
                                   <h1 class="text-center">L'autre Partie </h1>
                                   <h3 class="text-center">powered by Sygmaz</h3>
                                   <div class="reservation-button">
                                        <a href="{{ route('reservation') }}" >Reservation</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- item end -->

          <!-- item start -->
          <div class="item" style="background-image: url({{ asset('frontend/images/banner-2.jpg') }});">
               <div class="banner-overlay">
                    <div class="container">
                         <div class="row">
                              <div class="col-md-12">
                                   <img src="{{asset('frontend/images/sygmaz.jpg')}}" class="banner-logo" alt="">
                                   <h1 class="text-center">L'autre Partie </h1>
                                   <h3 class="text-center">powered by Sygmaz</h3>
                                   <div class="reservation-button">
                                        <a href="{{ route('reservation') }}" >Reservation</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- item end -->

     </div>
     <!--- owl carousel end --->

</div>
<!-- Slider End -->


<!-- our specialities section start -->
<section class="lec_section lec_image_bck lec_fixed lec_section_no_overlay lec_wht_txt" data-stellar-background-ratio="0.2" data-image="{{ asset('frontend/images/slider/sl13.jpg') }}" id="specials" style="background-image: url({{asset('frontend/images/slider/sl13.jpg')}}); background-attachment: fixed; background-position: 50% 37.2094px;">
     <!-- Firefly -->
     <div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3">

     </div>
     
          <!-- Over -->
          <div class="lec_over" data-color="#000" data-opacity="0.8" style="background-color: rgb(0, 0, 0); opacity: 0.8;"></div>
     
          <div class="container text-center">
     
               <h3 class="text-center">Our Specialities</h3>
     
               <!-- boxes -->
               <!-- owl carouse start -->
               <div class="row">
                    <div class="event-carousel owl-carousel owl-theme lec_icon_boxes owl-loaded">
     
                         <!-- item start -->
                         <div class="item" style="background-image: url({{asset('frontend/images/sl5.jpg')}});">
                              <div class="col-md-12">
                                   <div class="lec_news_block text-center">
                                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="{{asset('frontend/images/event-1.jpg')}}" style="background-image: url(&quot;images/sl5.jpg')}}&quot;);"></span></span>
                                        <span class="lec_gold lec_title_animation lec_wht_txt"><span class="char1 lec_letter_F">F</span><span class="char2 lec_letter_r">r</span><span class="char3 lec_letter_i">i</span><span class="char4 lec_letter_d">d</span><span class="char5 lec_letter_a">a</span><span class="char6 lec_letter_y">y</span></span>
                                        <span class="lec_news_title lec_gold_subtitle">Hyderabadi Gil-E-Firdaus</span>
                                        <p>Our Hyderabadi Gil-E-Firdaus can easily be an instant hit among the sweet lovers. Base ingredient is Bottle Gourd (লাউ). For luxury catering to your next event, enquire at +8801819494949.</p>
                                   </div>
                              </div>
                         </div>
                         <!-- item end -->
     
                         <!-- item start -->
                         <div class="item" style="background-image: url({{asset('frontend/images/sl5.jpg')}});">
                              <div class="col-md-12">
                                   <div class="lec_news_block text-center">
                                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="{{asset('frontend/images/event-2.jpg')}}" style="background-image: url(&quot;images/sl5.jpg')}}&quot;);"></span></span>
                                        <span class="lec_gold lec_title_animation lec_wht_txt"><span class="char1 lec_letter_F">F</span><span class="char2 lec_letter_r">r</span><span class="char3 lec_letter_i">i</span><span class="char4 lec_letter_d">d</span><span class="char5 lec_letter_a">a</span><span class="char6 lec_letter_y">y</span></span>
                                        <span class="lec_news_title lec_gold_subtitle">soft Vietnamese Spring</span>
                                        <p>Thinking of serving an out of the box appetizer for your next house party? Our soft Vietnamese Spring rolls can be the perfect starter.Healthy and Yummy</p>
                                   </div>
                              </div>
                         </div>
                         <!-- item end -->
     
                        
                         
                    </div>               
               </div>
               <!-- owl carouse end -->
     
          </div>
          <!-- container end -->
     
</section>
<!-- our specialities section end -->


<!-- about section start -->
<section class="lec_section lec_section_no_overlay" id="story">

     <div class="lec_over" data-color="#333" data-opacity="0.05" style="background-color: rgb(51, 51, 51); opacity: 0.05;">
     </div>

     <div class="container text-center">

          <!--- title start --->
          <div class="row">
               <div class="col-md-12">
                    <h1>About Us</h1>
               </div>
          </div>
          <!--- title end --->


          <div class="row">

               <!--- right part start --->
               <div class="col-md-10 col-md-offset-2 lec_animation_block skrollable skrollable-between" data-bottom-top="transform:translate3d(0px, 80px, 0px)" data-top-bottom="transform:translate3d(0px, -80px, 0px)" style="transform: translate3d(0px, 18.4694px, 0px);">
                    <img src="{{asset('frontend/images/about.jpg')}}" class="img-fluid" alt="">
               </div>
               <!--- right part end --->

               <!-- left part start -->
          <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posl lec_image_bck skrollable skrollable-between" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 80px, 0px)" data-image="{{ asset('frontend/images/main_back.jpg') }}" style="background-image: url({{ asset('frontend/images/main_back.jpg') }}); transform: translate3d(0px, 32.7679px, 0px);">

                    <div class="lec_over" data-color="#000" data-opacity="0.08" style="background-color: rgb(0, 0, 0); opacity: 0.08;"></div>

                    <div class="lec_parallax_menu lec_image_bck lec_fixed" style="background-attachment: fixed;">
                         <img src="{{asset('frontend/images/logo.png')}}" width="150px" alt="">
                         <h3 class="lec_gold_subtitle m-t-15">Dine with us or order to-go</h3>
                         <p>
                              S&S Cuisineurs is the brainchild of Shezan & Sigma, a couple who aims to revolutionize the gastronomy culture of social and corporate events in Bangladesh by shaking the very foundation of how food is being cooked, presented and served.
                         </p>
                    </div>
               </div>
               <!-- left part end -->


          </div>
          <!-- row end -->
     </div>
     <!-- container end -->

     <!-- about section start -->
</section>
<!-- about section end -->



<!-- event section start -->
<section class="lec_section lec_image_bck lec_fixed lec_section_no_overlay lec_wht_txt" data-stellar-background-ratio="0.2" data-image="{{ asset('frontend/images/slider/sl13.jpg') }}" id="specials" style="background-image: url({{asset('frontend/images/slider/sl13.jpg')}}); background-attachment: fixed; background-position: 50% 37.2094px;">
<!-- Firefly -->
<div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

     <!-- Over -->
     <div class="lec_over" data-color="#000" data-opacity="0.8" style="background-color: rgb(0, 0, 0); opacity: 0.8;"></div>

     <div class="container text-center">

          <h3 class="text-center">Let Us Cater <br>Your Next Event</h3>

          <!-- boxes -->
          <!-- owl carouse start -->
          <div class="row">
               <div class="event-carousel owl-carousel owl-theme lec_icon_boxes owl-loaded">

                    <!-- item start -->
                    <div class="item" style="background-image: url({{asset('frontend/images/sl5.jpg')}});">
                         <div class="col-md-12">
                              <div class="lec_news_block text-center">
                                   <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="{{asset('frontend/images/event-1.jpg')}}" style="background-image: url(&quot;images/sl5.jpg')}}&quot;);"></span></span>
                                   <span class="lec_gold lec_title_animation lec_wht_txt"><span class="char1 lec_letter_F">F</span><span class="char2 lec_letter_r">r</span><span class="char3 lec_letter_i">i</span><span class="char4 lec_letter_d">d</span><span class="char5 lec_letter_a">a</span><span class="char6 lec_letter_y">y</span></span>
                                   <span class="lec_news_title lec_gold_subtitle">Hyderabadi Gil-E-Firdaus</span>
                                   <p>Our Hyderabadi Gil-E-Firdaus can easily be an instant hit among the sweet lovers. Base ingredient is Bottle Gourd (লাউ). For luxury catering to your next event, enquire at +8801819494949.</p>
                              </div>
                         </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="item" style="background-image: url({{asset('frontend/images/sl5.jpg')}});">
                         <div class="col-md-12">
                              <div class="lec_news_block text-center">
                                   <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="{{asset('frontend/images/event-2.jpg')}}" style="background-image: url(&quot;images/sl5.jpg')}}&quot;);"></span></span>
                                   <span class="lec_gold lec_title_animation lec_wht_txt"><span class="char1 lec_letter_F">F</span><span class="char2 lec_letter_r">r</span><span class="char3 lec_letter_i">i</span><span class="char4 lec_letter_d">d</span><span class="char5 lec_letter_a">a</span><span class="char6 lec_letter_y">y</span></span>
                                   <span class="lec_news_title lec_gold_subtitle">soft Vietnamese Spring</span>
                                   <p>Thinking of serving an out of the box appetizer for your next house party? Our soft Vietnamese Spring rolls can be the perfect starter.Healthy and Yummy</p>
                              </div>
                         </div>
                    </div>
                    <!-- item end -->

                   
                    
               </div>               
          </div>
          <!-- owl carouse end -->

          <div class="row m-t-30">
               <div class="col-md-12">
                    <a href="contact.php" style="background: #f6bb6b; color:white; padding: 15px 30px; display: inline-block;">Get Qoute</a>
               </div>
          </div>

     </div>
     <!-- container end -->

</section>
<!-- event section end -->


<!-- main content start -->
<section id="lec_content" class="lec_content">

     <!-- section -->
     
     <!-- section end -->


     @include('frontend.include.footer')