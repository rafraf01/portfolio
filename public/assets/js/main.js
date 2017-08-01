$(document).ready(function(){
    var baseURL = $('#baseURL').val();

    var slider = $('#project-slider');

    $("#aboutPage").animatedModal({
        modalTarget: 'animatedModal',
        animatedIn: 'rollIn',
        animatedOut: 'rollOut'
    });

    $("#skillsPage").animatedModal({
        modalTarget: 'skillModal',
        animatedIn: 'flip',
        animatedOut: 'flipOutY'
    });
    $("#contactPage").animatedModal({
        modalTarget: 'contactModal',
        animatedIn: 'rubberBand',
        animatedOut: 'bounceOut'
    });

   /* $("#workPage").animatedModal({
        modalTarget: 'experienceModal',
        animatedIn: 'flip',
        animatedOut: 'flipOutY'
    });*/

    $(".proj").on('click',function() {
        $('#experienceModal').animate({
            scrollTop: $("#project").offset().top
        }, 1000);
    });

    var wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )

    wow.init();

});
