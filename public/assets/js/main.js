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
        animatedIn: 'zoomIn',
        animatedOut: 'bounceOut',
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

    /*$('.thumbnail-hover').animatedModal({
        modalTarget: 'projectModal',
        animatedIn: 'fadeInDown',
        animatedOut: 'fadeOutUp'
    });*/

    $('.carousel').carousel()

});
