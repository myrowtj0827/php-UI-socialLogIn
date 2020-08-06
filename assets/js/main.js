let flag_login = false;
let flag;

// localStorage.setItem("flag_login", false);
/**
 * login state decision
 */
$(document).ready(function() {
    $('.remember-login').click(function () {
        localStorage.setItem("flag_login", true);
    });

    // $("#headerLogIn").ready(function() {
        flag = localStorage.getItem("flag_login");

    if(flag === 'true') {
        $('.login-success').removeClass('show-btn');
        $('.logout-success').addClass('show-btn');


        $('.login-success').addClass('hide-btn');
        $('.logout-success').removeClass('hide-btn');
    } else {
        $('.logout-success').removeClass('show-btn');
        $('.login-success').addClass('show-btn');

        $('.logout-success').addClass('hide-btn');
        $('.login-success').removeClass('hide-btn');
    }
    // });

    $('.logout-success').click(function () {
        localStorage.setItem("flag_login", false);

        $('.logout-success').addClass('hide-btn');
        $('.login-success').removeClass('show-btn');
    });
});

/**
 * Slide Img6
 */
$(document).ready(function() {
    let owl = $("#owlSliderImg");
    owl.owlCarousel({
        items: 6,
        loop: true,
        margin: 10,

        nav: true,
        navText: ["<span class='display-arrow-left carousel-nav-left'>\n" +
        "                    <div class=\"justify-middle-contents tipsPrev\">\n" +
        "                        <img src=\"assets/images/home/arrow-left.png\" alt=\"\" />\n" +
        "                </div></span>","<span class='display-arrow-right carousel-nav-right'>\n" +
        "                    <div class=\"justify-middle-contents tipsNext\">\n" +
        "                        <img src=\"assets/images/home/arrow-right.png\" alt=\"\" />\n" +
        "                </div></span>"],
        dots:false,
        autoplay: true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:2
            },

            600:{
                items:3
            },
            992:{
                items:4
            },
            1440:{
                items:6
            }
        }
    });

    owl.trigger('owl.play',2500);

    $(".tipsNext").click(function(){
        owl.trigger('owl.next');
    });

    $(".tipsPrev").click(function(){
        owl.trigger('owl.prev');
    });
});

/**
 * Slide Img1
 */
$(document).ready(function() {
    let owl = $("#owlSliderOne");
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<span class='display-arrow-left carousel-nav-left'>\n" +
        "                    <div class=\"justify-middle-contents tipsPrev\">\n" +
        "                        <img src=\"assets/images/home/arrow-left.png\" alt=\"\" />\n" +
        "                </div></span>","<span class='display-arrow-right carousel-nav-right'>\n" +
        "                    <div class=\"justify-middle-contents tipsNext\">\n" +
        "                        <img src=\"assets/images/home/arrow-right.png\" alt=\"\" />\n" +
        "                </div></span>"],
        dots: false,
        autoplay: true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:1
            },
        }
    });

    owl.trigger('owl.play',2500);

    $(".tipsNext").click(function(){
        owl.trigger('owl.next');
    });
    $(".tipsPrev").click(function(){
        owl.trigger('owl.prev');
    });
});