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
        $(".toggle-btn i").toggleClass("nav-active");
    });
});
$(document).ready(function (){
    $("#toggle-btn").click(function () {
        $(".nav").toggleClass("nav-active");
        $("#toggle-btn i").toggleClass("nav-active");
    });
}); 