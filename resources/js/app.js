import './bootstrap';

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    $(document).ready(function () {
        // Store the image element for easier reference
        var imageElement = $('.centerImage img');

        // On hover over each service item
        $('.service-item').hover(
            function () {
                // Get the new image URL (you can replace this with the actual image URL you want for each service)
                var newImage = $(this).data('image');

                // Fade out the current image
                imageElement.fadeOut(300, function () {
                    // Change the image source
                    imageElement.attr('src', newImage);

                    // Fade in the new image
                    imageElement.fadeIn(300);
                });
            },
            function () {
                // Reset the image when the hover is removed (optional, you can keep this if you want to revert to a default image)
                var defaultImage = '/assets/img/water.png'; // Replace with your default image URL
                imageElement.fadeOut(300, function () {
                    // Set the default image
                    imageElement.attr('src', defaultImage);

                    // Fade the image back in
                    imageElement.fadeIn(300);
                });
            }
        );
    });

    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


})(jQuery);

