$(document).ready(function () {
    if($(window).width()<768){
        $('#header').addClass("collapse");
    }
    $(window).resize(function (e) {
        if($(window).width()<768){
            $('#header').addClass("collapse");
        }
        else {
            $('#header').removeClass("collapse");
        }
    });

})

