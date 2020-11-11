
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $(".ajax-form").submit(function(e){
        e.preventDefault()
        let $this = $(this);
        let formData = new FormData(this);
        $this.find(".has-danger").removeClass('has-error');
    $this.find(".form-error").remove();
        
        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function(response){
                if( response.payment_method == 1 ){
                    swal('','Reservation Successfully Done','success')
                }
                else{
                    let redirectURl = JSON.parse(response).GatewayPageURL
                    return window.location.href = redirectURl
                }
           
                $(".ajax-form textarea").val('');
            },
            error: function(response){
                data = response.responseJSON
                $.each(data.errors, (key, value) => {
                    $("[name^="+key+"]").parent().addClass('has-error')
                    $("[name^="+key+"]").parent().append('<p class="form-error mb-0"><small class="danger text-muted">'+value[0]+'</small></p>');
                })
            }
        })
    })
})



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

    $(".payment-modal-button").click(function(){
        $(".payment-modal").show();
        $(".nav-header").css({
            "zIndex": "0"
        })
    })
})




