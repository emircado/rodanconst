$(function() {
    // ALL
    $("#menu-switch").click(function(e) {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $("#main-nav").slideUp(400);
        } else {
            $(this).addClass('open');
            $("#main-nav").slideDown(400);
        }
    });

    // HOME PAGE ONLY
    $("#get_started").click(function(e) {
        $('html, body').animate({ scrollTop:  $("#home-services").offset().top - $(".header-container").height() }, 500);
    });

    var testi_count = 1;
    setInterval(function() {
        $("#testi_"+testi_count).fadeOut(500, function() {
            testi_count++;
            if (testi_count == 4) {
                testi_count = 1;
            }
            $("#testi_"+testi_count).fadeIn(500);
        });
        $("#home-testimonials-box").fadeOut(500, function() {
            $("#home-testimonials-box").fadeIn(500);
        });
    }, 8000);
});