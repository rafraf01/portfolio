$(document).ready(function(){
    var baseURL = $('#baseURL').val();

    $(".projct").on('click',function(e) {
        $('html,body').animate({
            scrollTop: $("#project").offset().top
        }, 1000);

        e.preventDefault();
    });

    $('.back-to-home').on('click',function(){
        $('html,body').fadeOut('250',function(){
            window.location.href='/'
        });
        return false;
    });

});
