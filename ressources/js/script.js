$(document).ready(function () {
    var Carousel = $('.MyCarousel');

    Carousel.addClass('owl-carousel owl-theme');
    Carousel.owlCarousel({
        dots: false,
        items: 3,
        responsiveRefreshRate: true,
        navText: ['<span class="glyphicon glyphicon-chevron-left"></span>', '<span class="glyphicon glyphicon-chevron-right"></span>'],
        loop: true,
        nav: true,
        responsive: {
            0: {
                dots: false,
                nav: true,
                items: 1
            },
            560: {
                dots: false,
                nav: true,
                items: 1
            },
            750: {
                dots: false,
                nav: true,
                items: 1
            }
        }
    });

});

