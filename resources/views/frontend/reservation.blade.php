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


            <div class="row">
                
            </div>

            <div class="row on-spot-reservation-form">
                <form action="{{ route('makeOnSpotReservation') }}" class="ajax-form" method="post">

                    <div class="col-md-6">
                        <input type="date" name="booking_date" placeholder="Date" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="time" name="booking_time" placeholder="Time" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="adult" oninput="updatePrice()" placeholder="Adult" id="adult_pricing" data-price="{{App\Models\config::where('name', 'Adult')->first()->price}}" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="text" oninput="updatePrice()" name="child_under_120_cm" id="child_under_120_cm" placeholder="Child under 120 cm" class="form-control" data-price="{{App\Models\config::where('name', 'Child Under 120 cm')->first()->price}}" />
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email"  />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" placeholder="Phone" class="form-control"  />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="child_under_132_cm" id="child_under_132_cm" placeholder="Child under 132 cm" oninput="updatePrice()" data-price="{{App\Models\config::where('name', 'Child under 132cm')->first()->price}}" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="city" placeholder="City" class="form-control"  />
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="country" placeholder="Country" class="form-control"  />
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" placeholder="Address" name="address" rows="2"></textarea>
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" placeholder="Message" name="message" rows="6"></textarea>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="booking_price">
                            @foreach(App\Models\config::all() as $config)
                            <p class="text-center" style="max-width: unset; margin-left: 15px;">Amount for {{ $config->name }} : {{ $config->price }}</p>
                            @endforeach
                       </div>
                    </div>
                    <div class="col-md-12">
                          <div class="form-check">
                            <div>
                                <input class="form-check-input" type="radio" name="payment_method" required  id="exampleRadios2" value="1">
                                <label class="form-check-label" for="exampleRadios2">
                              On Spot Payment
                            </label>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-12">
                          <div class="form-check">
                            <div>
                                <input class="form-check-input" type="radio" name="payment_method" required  id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                              Online Payment
                            </label>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-12">
                        <p>Total Amount : <span id="total">0</span> BDT</p>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary payment-modal-button">
                            Proceed
                        </button> --}}
                        
                        <!-- Modal -->
                        <div class="payment-modal">
                            <div class="payment-success">

                            </div>
                        </div>
                        <button type="submit" class="btn">Make reservation</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- container end -->

    </section>
    <!-- section end -->


</section>

<script>
    let adult_pricing = document.getElementById("adult_pricing")
    let child_under_120_cm = document.getElementById('child_under_120_cm')
    let child_under_132_cm = document.getElementById('child_under_132_cm')
    let total = document.getElementById('total')




    function updatePrice(){
        adult = {
            number : adult_pricing.value | 0,
            price : parseFloat(adult_pricing.dataset.price)
        }
        child120 = {
            number: child_under_120_cm.value | 0,
            price :parseFloat(child_under_120_cm.dataset.price)
        }

        child132 = {
            number: child_under_132_cm.value | 0,
            price: parseFloat(child_under_132_cm.dataset.price)
        }

        let priceTotal = (adult.number*adult.price) + (child120.price*child120.number) + (child132.price*child132.number)

        total.innerHTML = priceTotal

    }








</script>
<!-- Content End -->
@include('frontend.include.footer')