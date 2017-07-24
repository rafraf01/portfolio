$(document).ready(function(){
   /* $('.about').on('click',function(){
        $('#aboutPage').modal('show');
    })*/

    $("#aboutPage").animatedModal({
        modalTarget: 'animatedModal',
        animatedIn: 'rollIn',
        animatedOut: 'rollOut'
    });

    $("#skills").animatedModal({
        modalTarget: 'skillModal',
        animatedIn: 'zoomIn',
        animatedOut: 'zoomOutDown'
    });
});

