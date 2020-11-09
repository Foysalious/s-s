<!-- navbar start -->
<header class="nav-header">
    <div class="container">
        <!-- Logo start-->
    <a href="{{route('index')}}" class="lec_logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
        </a>
        <!-- Logo end-->

        <!-- Menu -->
        <div class="lec_main_menu">
            <div class="lec_main_menu_icon">
                <i></i><i></i><i></i><i></i>
                <b>Menu</b>
                <b class="lec_main_menu_icon_b">Close</b>
            </div>
        </div>

        <!-- Menu Content -->
        <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)">
            <!-- Over -->
            <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
        </div>

        <div class="lec_main_menu_content_menu lec_wht_txt text-right">
            <div class="container">
                <ul>
                    <li>
                    <a href="{{route('index')}}">Home</a>
                    </li>

                    <li>
                        <a href="{{route('menu')}}">Menu</a>
                    </li>

                    <li>
                        <a href="{{route('reservation')}}">Reservation</a>
                    </li>
                    <li>
                        <a href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- container end -->
        </div>
        <!-- menu content end -->
    </div>
    <!-- container end -->
</header>
<!-- navbar End -->