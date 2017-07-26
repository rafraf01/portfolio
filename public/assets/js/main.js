$(document).ready(function(){
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

    $("#workPage").animatedModal({
        modalTarget: 'experienceModal',
        animatedIn: 'flip',
        animatedOut: 'flipOutY'
    });

    $(".proj").click(function() {
        $('#experienceModal').animate({
            scrollTop: $("#project").offset().top
        }, 900);
    });

    $('.thumbnail-hover').animatedModal({
        modalTarget: 'projectModal',
        animatedIn: 'fadeInDown',
        animatedOut: 'fadeOutUp'
    });

    /*slider.owlCarousel({
        items:1,
        pagination:true,
        navigation:true,
        navigationText : ["prev","next"]
    });*/
    var swiper = new Swiper('.swiper-container', {
                paginationClickable: true
     });


/*$('.proj-prev').on('click',function(){
        slider.trigger('slider.prev');
    });
    $('.proj-next').on('click',function(){
        slider.trigger('slider.next');
    });*/
});

