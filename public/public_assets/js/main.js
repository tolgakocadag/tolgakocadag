/**
 * Created by Dell on 14/07/2017.
 */

//==================DATE TIME CURRENT=========
function startTime() {
    "use strict";
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var day = today.getDay();
    var month = today.getMonth();
    var year = today.getFullYear();
    var days = ['Pazar', 'Pazartesi', 'Salı','Çarşamba','Perşembe','Cuma','Cumartesi'];
    var months = ['Ocak', 'Şubat', 'Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'];
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('datetime-current').innerHTML =
        h + ":" + m ;
    var t = setTimeout(startTime, 500);
    document.getElementById("year-current").innerHTML = today.getDate()+' '+months[month]+' '+year+' '+days[day];
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
//=====================menu mobile==============
(function($) {

    $.fn.menumaker = function(options) {

        var cssmenu = $(this), settings = $.extend({
            title: "Menu",
            format: "dropdown",
            sticky: false
        }, options);

        return this.each(function() {

            cssmenu.find('li ul').parent().addClass('has-sub');

            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    $(this).toggleClass('active');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').hide();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').show();
                    }
                });
            };

            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');

            if (settings.sticky === true) cssmenu.css('position', 'fixed');

            resizeFix = function() {
                if ($( window ).width() > 768) {
                    cssmenu.find('ul').show();
                }

                if ($(window).width() <= 768) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);

        });
    };
})(jQuery);

(function($){
    $(document).ready(function(){

        $(document).ready(function() {
            $("#cssmenu").menumaker({
                title: "",
                format: "multitoggle"
            });

            $("#cssmenu").prepend("<div id='menu-line'></div>");

            var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

            $("#cssmenu > ul > li").each(function() {
                if ($(this).hasClass('active')) {
                    activeElement = $(this);
                    foundActive = true;
                }
            });

            if (foundActive === false) {
                activeElement = $("#cssmenu > ul > li").first();
            }

            defaultWidth = lineWidth = activeElement.width();

            defaultPosition = linePosition = activeElement.position().left;

            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);

            $("#cssmenu > ul > li").hover(function() {
                    activeElement = $(this);
                    lineWidth = activeElement.width();
                    linePosition = activeElement.position().left;
                    menuLine.css("width", lineWidth);
                    menuLine.css("left", linePosition);
                },
                function() {
                    menuLine.css("left", defaultPosition);
                    menuLine.css("width", defaultWidth);
                });

        });


    });
})(jQuery);

//====================Select===========================
$(document).ready(function () {
    "use strict";
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
});

$(document).on('click', '.btn-select', function (e) {
    "use strict";
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li a").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    "use strict";
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});



jQuery(document).ready(function ($) {
    "use strict";
    //BACK TOP TOP
    $('body').append('<div id="toTop"><div class="btn btn-totop"><i class="fa fa-chevron-up" aria-hidden="true"></i></div></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function(e){
        if($(e.target).is('.btn-totop')){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        }
        if($(e.target).is('.btn-totop i')){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        }
    });

    // ============================MEGA MENU 1 hover=================================
    //Sport
    $('.home-sport').on({
        mouseenter: function () {
            $('.uni-mega-menu-1-sport').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-1-sport').hide();
        }
    });

    //Economy
    $('.home-economy').on({
        mouseenter: function () {
            $('.uni-mega-menu-1-economy').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-1-economy').hide();
        }
    });

    //Fashion
    $('.home-fashion').on({
        mouseenter: function () {
            $('.uni-mega-menu-1-fashion').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-1-fashion').hide();
        }
    });

    //MUSIC
    $('.home-music').on({
        mouseenter: function () {
            $('.uni-mega-menu-1-music').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-1-music').hide();
        }
    });

    //VIDEO
    $('.home-video').on({
        mouseenter: function () {
            $('.uni-mega-menu-1-video').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-1-video').hide();
        }
    });
    $('.uni-mega-menu-1-sport, .uni-mega-menu-1-economy, .uni-mega-menu-1-fashion, .uni-mega-menu-1-music, .uni-mega-menu-1-video').on({
        mouseenter: function () {
            $(this).show();
        },
        mouseleave: function () {
            $(this).fadeOut();
        }
    });


    // ============================MEGA MENU 2 hover=================================
    $('.home-icon').on({
        mouseenter: function () {
            $('.uni-mega-menu-2').fadeIn();
        },
        mouseleave: function () {
            $('.uni-mega-menu-2').hide();
        }
    });

    $('.uni-mega-menu-2').on({
        mouseenter: function () {
            $(this).show();
        },
        mouseleave: function () {
            $(this).fadeOut();
        }
    });


    //====================MENU STICKY====================
    $(window).on('load', function () {
        $(".uni-sticky").sticky({ topSpacing: 0 });
    });

    //======================search menu=============================
    $('.uni-search-des').on('click', function (e) {
        if($(e.target).is('.toggle-form')){
            $('.form-search-wrapper').slideToggle();
        }
    });


    //==================load page===============
    setTimeout(function() {
        jQuery('.load-page').hide();
    }, 500);
    //===================slide=================
    $('#vk-owl-demo-singer-slider').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:false,
        navText: [],
        responsive:{
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });
    $('#uni-home-default-hotnews-economy-slide, #uni-home-default-hotnews-sport-slide, #uni-home-default-hotnews-fashion-slide, #uni-home-default-hotnews-music-slide, #uni-home-default-hotnews-video-slide').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });

    $('#uni-home-default-economy-newest-slide, #uni-home-default-economy-popular-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });
    $('#uni-home-default-sport-newest-slide, #uni-home-default-sport-popular-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });
    $('#uni-home-default-fashion-newest-slide, #uni-home-default-fashion-popular-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });
    $('#uni-home-default-music-newest-slide, #uni-home-default-music-popular-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });
    $('#uni-home-default-video-newest-slide, #uni-home-default-video-popular-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });
    $('#image-post-form-author, #image-post-relate').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1
    });

    $('#vk-owl-ep-slider').owlCarousel({
        loop:true,
        items:1,
        nav:true,
        dots:false,
        autoplay:false,
        navText: []
    });

    $('#vk-owl-fea-slider').owlCarousel({
        loop:true,
        items:1,
        nav:true,
        dots:false,
        autoplay:false,
        navText: []
    });
    $('#uni-slide-post-slide').owlCarousel({
        loop:true,
        items:1,
        nav:true,
        dots:true,
        autoplay:true,
        navText: []
    });

    $('#vk-owl-home-fashion-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        navText: false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:4
            }
        }
    });

    $('#vk-sec-1-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: [],
        items:1,
        responsive:{
            600:{
                items:1
            }
        }
    });

    $('#vk-sec-2-slide').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        navText: []
    });

    $('#vk-tech-sec-2-slide').owlCarousel({
        items:1,
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        responsive:{
            768:{
                items:2
            },
            992:{
                items:4
            }
        }
    });

    $('#vk-owl-home-video-slider').owlCarousel({
        // center: true,
        items:2,
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        navText: [],
        responsive:{
            600:{
                items:3
            }
        }
    });
    $('#uni-mega-menu-tab1, #uni-mega-menu-tab2, #uni-mega-menu-tab3, #uni-mega-menu-tab4, #uni-mega-menu-tab5, #uni-mega-menu-tab6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });
    $('#uni-mega-menu-tab-sport-1, #uni-mega-menu-tab-sport-2, #uni-mega-menu-tab-sport-3, #uni-mega-menu-tab-sport-4, #uni-mega-menu-tab-sport-5, #uni-mega-menu-tab-sport-6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });


    $('#uni-mega-menu-tab-eco-1, #uni-mega-menu-tab-eco-2, #uni-mega-menu-tab-eco-3, #uni-mega-menu-tab-eco-4, #uni-mega-menu-tab-eco-5, #uni-mega-menu-tab-eco-6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });
    $('#uni-mega-menu-tab-fas-1, #uni-mega-menu-tab-fas-2, #uni-mega-menu-tab-fas-3, #uni-mega-menu-tab-fas-4, #uni-mega-menu-tab-fas-5, #uni-mega-menu-tab-fas-6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });
    $('#uni-mega-menu-tab-mus-1, #uni-mega-menu-tab-mus-2, #uni-mega-menu-tab-mus-3, #uni-mega-menu-tab-mus-4, #uni-mega-menu-tab-mus-5, #uni-mega-menu-tab-mus-6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });
    $('#uni-mega-menu-tab-video-1, #uni-mega-menu-tab-video-2, #uni-mega-menu-tab-video-3, #uni-mega-menu-tab-video-4, #uni-mega-menu-tab-video-5, #uni-mega-menu-tab-video-6').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        navText: [],
        items:4
    });
    $('#uni-home-video-popular').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false,
        navText: []
    });

//======================MENU MOBILES===================
    $('.mobile-menu-container .menu-mobile-nav').on('click', function (e) {
        if($(e.target).is('.icon-search-mobile i')){
            $('#cssmenu').slideToggle();
            $('.input-group').css('position','relative');
            $('#cssmenu').css('min-height','auto');
        }
        if($(e.target).is('.icon-bar i')){
            $('#cssmenu').slideToggle();
            $('#cssmenu ul').slideToggle();
            $('#cssmenu ul ul').hide();
        }
    });
    //======================MENU MOBILES===================
    $('.uni-icons-close'). on('click', function (e) {
        if($(e.target).is('i')){
            $('#cssmenu').hide();
            $('#cssmenu ul').hide();
        }
    });


    //===========================shop filter price======================================
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 1000,
            values: [ 75, 500 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );



    //======================replace image single product=============
    jQuery('.flexslider .product-slide .img-small img').on('click', function(e) {
        if($(e.target).is('img')){
            "use strict";
            var value2 = jQuery(this).attr("data-filter2");
            console.log(value2);

            jQuery('.flexslider .product-slide .img-small img').addClass('none');
            jQuery('.filter2').not("."+value2).removeClass('active');
            jQuery('.filter2').filter("."+value2).addClass('active');
        }

    });
    //==========================checkout===========================
    $(".woocommerce-info ").on('click', function (e) {
        if($(e.target).is('.click-here-to-login')){
            $('.vk-form-woo-login').slideToggle();
            return false;
        }
        if($(e.target).is('.click-here-entry-code')){
            $('.vk-check-coupon').slideToggle();
            return false;
        }
    }) ;
    $(".vk-checkout-creat-account").on('click', function (e) {
        if($(e.target).is('.checkbox-create-account')){
            $('.checkbox-create-account-form').slideToggle();
            return true;
        }
        return false;
    }) ;
});
