$(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
        $('nav').addClass('nav-fixed');
    } else {
        $('nav').removeClass('nav-fixed');
    }
});


$(document).ready(function () {
    $(".toggle-btn").click(function () {
        $(".nav").toggleClass("nav-active");
        $(".toggle-btn ").toggleClass("nav-active");
    });
});
/*scroll to top*/
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#arrow i").fadeIn();
        }
        else {
            $("#arrow i").fadeOut();
        }

    });
    $("#arrow i").on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
// Toggle button
$(document).ready(function (){
    $("#toggle-btn").click(function () {
        $(".nav").toggleClass("nav-active");
        $("#toggle-btn i").toggleClass("nav-active");
    });
}); 