
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
            <img src="{{asset('frontend/images/bbq/bbq_logo.png')}}" alt="" height="180"><br>
            <h1 class="text-center">Our Menus</h2>
                <div class="lec_slide_subtitle">S & S CUISINEURS</div>
        </div>
        <!-- Slider Texts End -->

    </div>
    <!-- container end -->
</div>
<!-- Slider End -->


<!-- menu section start -->
<section class="main-menu" style="background: #111111;">
    <div class="container">

        <!-- menu item start -->
        <div class="row">

            <!-- title start -->
            <div class="col-md-12">
                <h1 class="text-center">L'autre Partie</h1>
            </div>
            <!-- title end -->

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="menu-image">
                            <img src="{{asset('frontend/images/menu-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>Hyderabadi Gil-E-Firdaus</h3>
                            <p>Our Hyderabadi Gil-E-Firdaus can easily be an instant hit among the sweet lovers. Base ingredient is Bottle Gourd (লাউ). For luxury catering to your next event, enquire at +8801819494949.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>300 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>soft Vietnamese Spring rolls</h3>
                            <p>Thinking of serving an out of the box appetizer for your next house party? Our soft Vietnamese Spring rolls can be the perfect starter.Healthy and Yummy</p>
                        </div>
                        <div class="col-md-3">
                            <h3>500 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>strawberry cheesecakes</h3>
                            <p>No need to feel guilty. Our strawberry cheesecakes will always make your guests keep asking for more. For luxury catering, enquire at +8801819-494949 or inbox/DM us.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>700 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->



        </div>
        <!-- menu item end -->

    </div>
</section>
<!-- menu section end -->

<!-- menu section start -->
<section class="main-menu" style="background: #111111;">
    <div class="container">

        <!-- menu item start -->
        <div class="row">

            <!-- title start -->
            <div class="col-md-12">
                <h1 class="text-center">L'autre Partie</h1>
            </div>
            <!-- title end -->

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="menu-image">
                            <img src="{{asset('frontend/images/menu-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>Hyderabadi Gil-E-Firdaus</h3>
                            <p>Our Hyderabadi Gil-E-Firdaus can easily be an instant hit among the sweet lovers. Base ingredient is Bottle Gourd (লাউ). For luxury catering to your next event, enquire at +8801819494949.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>300 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>soft Vietnamese Spring rolls</h3>
                            <p>Thinking of serving an out of the box appetizer for your next house party? Our soft Vietnamese Spring rolls can be the perfect starter.Healthy and Yummy</p>
                        </div>
                        <div class="col-md-3">
                            <h3>500 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->

            <!-- food item start -->
            <div class="col-md-6">
                <div class="left">
                    <div class="row menu-food-item">
                        <div class="col-md-9">
                            <h3>strawberry cheesecakes</h3>
                            <p>No need to feel guilty. Our strawberry cheesecakes will always make your guests keep asking for more. For luxury catering, enquire at +8801819-494949 or inbox/DM us.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>700 BDT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- food item end -->



        </div>
        <!-- menu item end -->

    </div>
</section>
<!-- menu section end -->
@include('frontend.include.footer')