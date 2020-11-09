@include('frontend.include.header')
@include('frontend.include.navbar')

<!-- Slider -->
<div class="lec_slider lec_slider_inside lec_image_bck lec_fixed lec_wht_txt" data-stellar-background-ratio="0.3" data-image="images/shutterstock_430684768.jpg')}}">

    <!-- Firefly -->
    <div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

    <!-- Over -->
    <div class="lec_over" data-color="#000" data-opacity="0.8"></div>


    <div class="container">


        <!-- Slider Texts -->
        <div class="lec_slide_txt lec_slide_center_middle text-center">
            <img src="{{asset('frontend/images/bbq/bbq_logo.png')}}" alt="" height="180"><br>
            <h1 class="text-center">Make Your Reservation</h2>
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
    <section class="lec_section">

        <div class="container text-center">

            <h3 class="lec_gold_subtitle">Reservation Form</h3>

            <div class="row m-b-30">
                <div class="col-md-12 text-center">
                    <button class="reservation-btn onspot active-reservation">Reservation On Spot Pay</button>
                    <button class="reservation-btn online">Reservation Online Pay</button>
                </div>
            </div>

            <div class="row on-spot-reservation-form">
                <form action="">
                    <div class="col-md-5 col-md-offset-1">
                        <input type="date" placeholder="Date" class="form-control" required />
                        <input type="time" placeholder="Time" class="form-control" required />
                        <input type="text" placeholder="Person Total" class="form-control" required />
                        <input type="text" placeholder="Child under 120 cm" class="form-control" required />
                    </div>

                    <div class="col-md-5">
                        <input type="text" placeholder="Name" class="form-control" required />
                        <input type="email" class="form-control" placeholder="Email" required />
                        <input type="text" placeholder="Phone" class="form-control" required />
                        <input type="text" placeholder="Child under 132 cm" class="form-control" required />
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <textarea class="form-control" placeholder="Message" rows="6"></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" class="btn" value="Make reservation">
                    </div>
                </form>
            </div>

            <div class="row online-reservation-form">
                <form action="">
                    <div class="col-md-5 col-md-offset-1">
                        <input type="date" placeholder="Date" class="form-control" required />
                        <input type="time" placeholder="Time" class="form-control" required />
                        <input type="text" placeholder="Person Total" class="form-control" required />
                        <input type="text" placeholder="Child under 120 cm" class="form-control" required />
                        <p class="text-left">Total Amount : 1000 BDT</p>
                    </div>

                    <div class="col-md-5">
                        <input type="text" placeholder="Name" class="form-control" required />
                        <input type="email" class="form-control" placeholder="Email" required />
                        <input type="text" placeholder="Phone" class="form-control" required />
                        <input type="text" placeholder="Child under 132 cm" class="form-control" required />
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <textarea class="form-control" placeholder="Message" rows="6"></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" class="btn" value="Make reservation">
                    </div>
                </form>
            </div>


        </div>
        <!-- container end -->

    </section>
    <!-- section end -->


</section>
<!-- Content End -->
@include('frontend.include.footer')