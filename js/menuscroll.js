$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 20) {
            $(".menu").addClass("skew");
        } else {
            $(".menu").removeClass("skew");
        }
    });

    $(".menu").click(function () {
        $(".menu").removeClass("skew");
        $(".menu").addClass("flottant");
    });

    $(window).scroll(function () {
        if ($(document).scrollTop() < 20) {
            $(".menu").removeClass("flottant");
        }
    });
});