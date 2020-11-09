

$('.banner-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.event-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 10){
            $(".nav-header").css({
                "background" : "rgba(1,1,1,0.6)",
                "transition" : "0.4s ease-in-out"
            })
        }
        else{
            $(".nav-header").css({
                "background" : "unset"
            })
        }
    })
})


$(document).ready(function(){
    $(".onspot").click(function(){
        $(".onspot").addClass('active-reservation');
        $(".online").removeClass('active-reservation');

        $(".on-spot-reservation-form").show();
        $(".online-reservation-form").hide();
    })
    $(".online").click(function(){
        $(".onspot").removeClass('active-reservation');
        $(".online").addClass('active-reservation');

        $(".on-spot-reservation-form").hide();
        $(".online-reservation-form").show();
    })
})