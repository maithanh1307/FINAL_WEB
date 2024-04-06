(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

// hotel booking
ScrollReveal().reveal(".image-container img", {
    ...scrollRevealOption,
    origin: "left",
});

ScrollReveal().reveal(".about_content .subheader_hotel", {
    ...scrollRevealOption,
    delay: 500,
});

ScrollReveal().reveal(".about_content .section__header_hotel", {
    ...scrollRevealOption,
    delay: 900,
});

ScrollReveal().reveal(".about_content .section__description", {
    ...scrollRevealOption,
    delay: 1500,
});

ScrollReveal().reveal(".about_content .btn_hotel", {
    ...scrollRevealOption,
    delay: 2000,
});
ScrollReveal().reveal(".subheader_hotel2", {
    ...scrollRevealOption,
    delay: 2100,
});

ScrollReveal().reveal(".section__header_hotel1", {
    ...scrollRevealOption,
    delay: 2300,
});

ScrollReveal().reveal(".section__header_hotel2", {
    ...scrollRevealOption,
    delay: 2400,
});


// Dark mode



