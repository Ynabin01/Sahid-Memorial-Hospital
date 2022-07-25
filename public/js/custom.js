

$(document).ready(function () {

    $('.carousel-control-prev-icon').append('<i class="icofont-thin-left"></i>');
    $('.carousel-control-next-icon').append('<i class="icofont-thin-right"></i>');



$('.close').click(function () {

    $(this).parent('.popup-content').parent('.popup').hide();
});
    /********************
     *  banner
     * *****************/
    $('.sahid-slider .owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        dots: true,
        autoplay: true,
        smartSpeed:3500,
        nav: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        items: 1
    });

    /********************
     *  testimonial
     * *****************/
    $('.testimonial_slider').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: false,
        smartSpeed:2000,
        nav: true,
        navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.news').owlCarousel({
        loop: true,
        dots: true,
        autoplay: false,
        smartSpeed:3500,
        nav: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],

        responsive:{
            0:{
                items:1,
                nav:true
            },
            768:{
                items:2,
                nav:false
            },
            1000:{
                items:6,
                nav:true,
                loop:false
            }
        }
    });
    /********************
     *  back to top
     * *****************/
    $('.back-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 3000);
    });

    /********************
     * responsive menu
     * *****************/

    $('.main-menu-toggle').click(function () {
        $(this).parent('.main-navigation').children('.main-menu-container-collapse').first().slideToggle('1000');
    });
    /* **
     * Sub Menu
     **/
    $('nav .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-plus"></i> </span>');
    $('nav .page_item_has_children').append('<span class="sub-toggle-children"> <i class="fa fa-plus"></i> </span>');

    $('nav .sub-toggle').click(function () {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $('.navbar .sub-toggle-children').click(function () {
        $(this).parent('.page_item_has_children').children('ul.sub-menu').slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $('.countNum').counterUp();

    /*------------------------------------
     Search Menu
     --------------------------------------*/
    $('.column-button-search a').click(function () {

        $('.search-pop-up').toggleClass('active');
    });
});