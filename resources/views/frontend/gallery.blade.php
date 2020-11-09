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
            <img src="{{ asset('frontend/images/bbq/bbq_logo.png') }}" alt="" height="180"><br>
            <h1 class="text-center">Our Gallery</h2>
                <div class="lec_slide_subtitle">S & S CUISINEURS</div>
        </div>
        <!-- Slider Texts End -->

    </div>
    <!-- container end -->
</div>
<!-- Slider End -->


<!-- gallery main section start -->
<section class="gallery-section" style="background: #111111;">
    <div class="container">
        <div class="row">

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/gallery-1.jpg') }}">
                    <img src="{{ asset('frontend/images/gallery-1.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/gallery-2.jpg') }}">
                    <img src="{{ asset('frontend/images/gallery-2.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/gallery-3.jpg') }}">
                    <img src="{{ asset('frontend/images/gallery-3.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/event-1.jpg') }}">
                    <img src="{{ asset('frontend/images/event-1.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/event-2.jpg') }}">
                    <img src="{{ asset('frontend/images/event-2.jpg') }}" class="img-fluid" alt="">
               </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/event-3.jpg') }}">
                    <img src="{{ asset('frontend/images/event-3.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/menu-1.jpg') }}">
                    <img src="{{ asset('frontend/images/menu-1.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

            <!-- gallery image start -->
            <div class="gallery-image">
                <a data-fancybox="gallery"  href="{{ asset('frontend/images/menu-2.jpg') }}">
                    <img src="{{ asset('frontend/images/menu-2.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <!-- gallery image end -->

        </div>
    </div>
</section>
<!-- gallery main section end -->

@include('frontend.include.footer')