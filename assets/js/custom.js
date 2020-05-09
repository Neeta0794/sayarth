/*---stickey menu---*/
$(window).on('scroll', function() {
    var scroll = $(window).scrollTop();
    if (scroll < 200) {
        $(".navigation").removeClass("sticky");
    } else {
        $(".navigation").addClass("sticky");
    }
});



/*--- Main Slider ---*/
$("#vertical-bullets").show().revolution({
    sliderType: "standard",
    sliderLayout: "fullscreen",
    scrollbarDrag: "true",
    dottedOverlay: "none",
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "off",
        bullets: {
            enable: true,
            hide_onmobile: true,
            hide_under: 767,
            hide_onleave: false,
            direction: "vertical",
            h_align: "left",
            v_align: "center",
            h_offset: 30,
            v_offset: 0,
            space: 5,
            tmp: '<div class="tp-bullet-inner"></div><div class="tp-line"></div>'
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "90%",
        presize: true
    },
    responsiveLevels: [4096, 1200, 778, 480],
    gridwidth: [1140, 1024, 750, 480],
    gridheight: [600, 500, 500, 350],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origon: "slidercenter",
        speed: 9000,
        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 360,
    hideAllCaptionAtLilmit: 360,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
    }
});



/*---Product Owl Slider---*/
$(".features-curosel").owlCarousel({
    autoPlay: false,
    slideSpeed: 2000,
    items: 4,
    pagination: false,
    navigation: true,
    navigationText: ["<i class='flaticon-angle-pointing-to-left'></i>", "<i class='flaticon-angle-arrow-pointing-to-right'></i>"],
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [979, 3],
    itemsMobile: [767, 1],
    rewindNav: false,
    lazyLoad: true
});



/*--- Testimonial Slider---*/
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: false
    });
});



/*--- Search Bar ---*/
$('.full_search').on('click', '.search-toggle', function(e) {
    var selector = $(this).data('selector');

    $(selector).toggleClass('show').find('.search-input').focus();
    $(this).toggleClass('active');

    e.preventDefault();
});


/*--- Sticky Side Bar ---*/
$(document).ready(function() {
    var sticky = new Sticky('.sticky');
});