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

    $("#hireMe").animatedModal({
        modalTarget: 'contactModal',
        animatedIn: 'rubberBand',
        animatedOut: 'bounceOut'
    });

    $('#contactForm').submit(function(e){
        e.preventDefault();
    });

    $('#send').on('click',function(){
        var $form = $('#contactForm');

        if ($('#firstname').val() == '' || $('#lastname').val() == '' || $('#email').val() == ''){
            swal("Error!", "Please fill up required fields.", "error");
        }else{
            $('#loader').fadeIn('slow');
            $.ajax({
                url : '/email',
                type : 'post',
                data: $form.serializeArray(),
                success : function (data){
                    $('#loader').fadeOut('slow');
                    swal("Success!", data, "success");
                    $('.confirm').click(function(){
                        location.reload();
                    });
                }
            })
        }
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
