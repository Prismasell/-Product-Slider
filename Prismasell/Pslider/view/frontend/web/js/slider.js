require(['jquery', 'slick'], function($) {
    $(document).ready(function() {
        console.log('Slick slider is running'); // Check if this message appears in the console

        // Initialize the Slick slider
        $('.slider-content').slick({
            infinite: true,
            slidesToShow: 3,  // Adjust number of slides to show
            slidesToScroll: 1, // Number of slides to scroll
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true
        });
    });
});
