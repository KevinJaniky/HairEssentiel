$(document).ready(function () {
    var Carousel = $('.MyCarousel');
    var Salon = $('.carouselsalon');

    Carousel.addClass('owl-carousel owl-theme');
    Carousel.owlCarousel({
        dots: false,
        items: 1,
        responsiveRefreshRate: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
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
    Salon.addClass('owl-carousel owl-theme');
    Salon.owlCarousel({
        dots: false,
        items: 1,
        responsiveRefreshRate: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
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

